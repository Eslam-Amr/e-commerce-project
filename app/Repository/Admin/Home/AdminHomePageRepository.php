<?php

namespace App\Repository\Admin\Home;

use App\Interface\Admin\Home\AdminHomePageRepositoryInterface;

use App\Models\Checkout;
use App\Models\Profit;
use App\Models\SellerReview;
use App\StautsArray;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AdminHomePageRepository implements AdminHomePageRepositoryInterface
{
    use StautsArray;

    public function index()
    {
        $currentDate = Carbon::now();
        $currentYear = $currentDate->year;
        $currentMonth = $currentDate->month;
        $currentDay = $currentDate->day;
        $profits = Profit::select('profit','date','seller_id')->whereYear('date', $currentYear)->get();
        // dd($profits->sum('profit'));
        if (auth('admin')->check()) {
$sumOfProfit = $profits->sum('profit');
// dd($sumOfProfit);
$profitOfYear = $profits->sum('profit');
$profitOfMonth = $profits->filter(function ($profit) use ($currentMonth) {
    // dd($profit->date);
    // if ($profit->date instanceof Carbon) {
        return $profit->date->month == $currentMonth;
    // }
    // return $profit->date->month == $currentMonth;
})->sum('profit');
$profitOfDay = $profits->filter(function ($profit) use ($currentMonth, $currentDay) {
    return $profit->date->month == $currentMonth && $profit->date->day == $currentDay;
})->sum('profit');
            $checkoutStats = Checkout::select(DB::raw('
        SUM(CASE WHEN status = "Completed" THEN 1 ELSE 0 END) as completed_count,
        SUM(CASE WHEN status = "Pending" THEN 1 ELSE 0 END) as pending_count
    '))
    ->first();
$checkoutCompleted = $checkoutStats->completed_count;
$checkoutPending = $checkoutStats->pending_count;
            $completedArray=$this->getCompletedOrderStatusForAdmin();
            $pendingArray=$this->getPendingOrderStatusForAdmin();
            $years = [$currentYear - 4, $currentYear - 3, $currentYear - 2, $currentYear - 1, $currentYear];
$yearGraph=$this->getProfitForYear();
            $salesData = $this->getSalesDataForFiveYear($years,$currentYear,$profitOfYear);
        }
        else if (auth('seller')->check()) {
      $sumOfProfit = $profits->where('seller_id',auth('seller')->user()->id)->sum('profit');
            $profitOfYear = $profits->where('seller_id',auth('seller')->user()->id)->sum('profit');
            $profitOfMonth = $profits->where('seller_id',auth('seller')->user()->id)->filter(function ($profit) use ($currentMonth) {
                return $profit->date->month == $currentMonth;
            })->sum('profit');
            $profitOfDay = $profits->where('seller_id',auth('seller')->user()->id)->filter(function ($profit) use ($currentMonth, $currentDay) {
                return $profit->date->month == $currentMonth && $profit->date->day == $currentDay;
            })->sum('profit');
         $checkoutStats = Checkout::where('seller_id',auth('seller')->user()->id)->select(DB::raw('
            SUM(CASE WHEN status = "Completed" THEN 1 ELSE 0 END) as completed_count,
            SUM(CASE WHEN status = "Pending" THEN 1 ELSE 0 END) as pending_count
        '))
        ->first();

    $checkoutCompleted = $checkoutStats->completed_count;
    $checkoutPending = $checkoutStats->pending_count;

            $completedArray=$this->getCompletedOrderStatusForSeller();
            $pendingArray=$this->getPendingOrderStatusForSeller();

            $currentYear = date('Y');
            $years = [$currentYear - 4, $currentYear - 3, $currentYear - 2, $currentYear - 1, $currentYear];
$yearGraph=$this->getProfitForYear();

            $salesData = $this->getSalesDataForFiveYear($years,$currentYear,$profitOfYear);
            // dd($salesData);
            $avgReview=SellerReview::where('seller_id',auth('seller')->user()->id)->avg('rate');
            $countReview=SellerReview::where('seller_id',auth('seller')->user()->id)->count();
        }
        // return get_defined_vars();

    return view('admin.index',get_defined_vars());
    }
public function getProfitsForYear($year, $sellerId = null)
{
    return Profit::when($sellerId, function ($query) use ($sellerId) {
        return $query->where('seller_id', $sellerId);
    })->whereYear('date', $year)->get();
}

public function getProfitsForMonth($year, $month, $sellerId = null)
{
    return $this->getProfitsForYear($year, $sellerId)->filter(function ($profit) use ($month) {
        return $profit->date->month == $month;
    });
}

public function getProfitsForDay($year, $month, $day, $sellerId = null)
{
    return $this->getProfitsForMonth($year, $month, $sellerId)->filter(function ($profit) use ($day) {
        return $profit->date->day == $day;
    });
}
public function getCheckoutStats($sellerId = null)
{
    return Checkout::when($sellerId, function ($query) use ($sellerId) {
        return $query->where('seller_id', $sellerId);
    })->select(DB::raw('
        SUM(CASE WHEN status = "Completed" THEN 1 ELSE 0 END) as completed_count,
        SUM(CASE WHEN status = "Pending" THEN 1 ELSE 0 END) as pending_count
    '))->first();
}
}
