<?php

namespace App\Http\Controllers\Admin\Home;

use DateTime;
use Carbon\Carbon;
use App\StautsArray;
use App\Models\Profit;
use App\Models\Product;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Services\Admin\Home\AdminHomePageService;
use App\Interface\Admin\Home\AdminHomePageRepositoryInterface;

class AdminHomePageController extends Controller
{
    use StautsArray;
    private $adminRepository;

    public function __construct(AdminHomePageRepositoryInterface $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }




    public function __invoke(){
        return   $this->adminRepository->index();
       }

    // public function __invoke()
    // {
    //     $currentDate = Carbon::now();
    //     $currentYear = $currentDate->year;
    //     $currentMonth = $currentDate->month;
    //     $currentDay = $currentDate->day;
    //     $profits = Profit::select('profit', 'date', 'seller_id')->whereYear('date', $currentYear)->get();
    //     // dd($profits->sum('profit'));
    //     if (auth('admin')->check()) {
    //         $sumOfProfit = $profits->sum('profit');
    //         // dd($sumOfProfit);
    //         $profitOfYear = $profits->sum('profit');
    //         $profitOfMonth = $profits->filter(function ($profit) use ($currentMonth) {
    //             // dd($profit->date);
    //             // if ($profit->date instanceof Carbon) {
    //             return $profit->date->month == $currentMonth;
    //             // }
    //             // return $profit->date->month == $currentMonth;
    //         })->sum('profit');
    //         $profitOfDay = $profits->filter(function ($profit) use ($currentMonth, $currentDay) {
    //             return $profit->date->month == $currentMonth && $profit->date->day == $currentDay;
    //         })->sum('profit');
    //         $checkoutStats = Checkout::select(DB::raw('
    //     SUM(CASE WHEN status = "Completed" THEN 1 ELSE 0 END) as completed_count,
    //     SUM(CASE WHEN status = "Pending" THEN 1 ELSE 0 END) as pending_count
    // '))
    //             ->first();
    //         $checkoutCompleted = $checkoutStats->completed_count;
    //         $checkoutPending = $checkoutStats->pending_count;
    //         $completedArray = $this->getCompletedOrderStatusForAdmin();
    //         $pendingArray = $this->getPendingOrderStatusForAdmin();
    //         $years = [$currentYear - 4, $currentYear - 3, $currentYear - 2, $currentYear - 1, $currentYear];
    //         $yearGraph = $this->getProfitForYear();
    //         $salesData = $this->getSalesDataForFiveYear($years, $currentYear, $profitOfYear);
    //     } else if (auth('seller')->check()) {
    //         $sumOfProfit = $profits->where('seller_id', auth('seller')->user()->id)->sum('profit');
    //         $profitOfYear = $profits->where('seller_id', auth('seller')->user()->id)->sum('profit');
    //         $profitOfMonth = $profits->where('seller_id', auth('seller')->user()->id)->filter(function ($profit) use ($currentMonth) {
    //             return $profit->date->month == $currentMonth;
    //         })->sum('profit');
    //         $profitOfDay = $profits->where('seller_id', auth('seller')->user()->id)->filter(function ($profit) use ($currentMonth, $currentDay) {
    //             return $profit->date->month == $currentMonth && $profit->date->day == $currentDay;
    //         })->sum('profit');
    //         $checkoutStats = Checkout::where('seller_id', auth('seller')->user()->id)->select(DB::raw('
    //         SUM(CASE WHEN status = "Completed" THEN 1 ELSE 0 END) as completed_count,
    //         SUM(CASE WHEN status = "Pending" THEN 1 ELSE 0 END) as pending_count
    //     '))
    //             ->first();

    //         $checkoutCompleted = $checkoutStats->completed_count;
    //         $checkoutPending = $checkoutStats->pending_count;

    //         $completedArray = $this->getCompletedOrderStatusForSeller();
    //         $pendingArray = $this->getPendingOrderStatusForSeller();

    //         $currentYear = date('Y');
    //         $years = [$currentYear - 4, $currentYear - 3, $currentYear - 2, $currentYear - 1, $currentYear];
    //         $yearGraph = $this->getProfitForYear();

    //         $salesData = $this->getSalesDataForFiveYear($years, $currentYear, $profitOfYear);
    //         // dd($salesData);
    //     }
    //     // return get_defined_vars();
    //     return view('admin.index', get_defined_vars());
    // }





    // protected $profitService;

    // public function __construct(AdminHomePageService $profitService)
    // {
    //     $this->profitService = $profitService;
    // }
    /*
    public function __invoke()
    {
        return $this->__invoke();
    }*/
    /**
     * Handle the incoming request.
     */
    /*
    optimize query
    */

    //     public function __invoke()
    //     {
    //         $currentDate = Carbon::now();
    //         $currentYear = $currentDate->year;
    //         $currentMonth = $currentDate->month;
    //         $currentDay = $currentDate->day;
    //         $profits = Profit::select('profit')->whereYear('date', $currentYear)->get();
    //         if (auth('admin')->check()) {
    // $sumOfProfit = $profits->sum('profit');
    // $profitOfYear = $profits->sum('profit');
    // $profitOfMonth = $profits->filter(function ($profit) use ($currentMonth) {
    //     return $profit->date->month == $currentMonth;
    // })->sum('profit');
    // $profitOfDay = $profits->filter(function ($profit) use ($currentMonth, $currentDay) {
    //     return $profit->date->month == $currentMonth && $profit->date->day == $currentDay;
    // })->sum('profit');
    //             $checkoutStats = Checkout::select(DB::raw('
    //         SUM(CASE WHEN status = "Completed" THEN 1 ELSE 0 END) as completed_count,
    //         SUM(CASE WHEN status = "Pending" THEN 1 ELSE 0 END) as pending_count
    //     '))
    //     ->first();
    // $checkoutCompleted = $checkoutStats->completed_count;
    // $checkoutPending = $checkoutStats->pending_count;
    //             $completedArray=$this->getCompletedOrderStatusForAdmin();
    //             $pendingArray=$this->getPendingOrderStatusForAdmin();
    //             $years = [$currentYear - 4, $currentYear - 3, $currentYear - 2, $currentYear - 1, $currentYear];
    // $yearGraph=$this->getProfitForYear();
    //             $salesData = $this->getSalesDataForFiveYear($years,$currentYear,$profitOfYear);
    //         }
    //         else if (auth('seller')->check()) {
    //       $sumOfProfit = $profits->where('seller_id',auth('seller')->user()->id)->sum('profit');
    //             $profitOfYear = $profits->where('seller_id',auth('seller')->user()->id)->sum('profit');
    //             $profitOfMonth = $profits->where('seller_id',auth('seller')->user()->id)->filter(function ($profit) use ($currentMonth) {
    //                 return $profit->date->month == $currentMonth;
    //             })->sum('profit');
    //             $profitOfDay = $profits->where('seller_id',auth('seller')->user()->id)->filter(function ($profit) use ($currentMonth, $currentDay) {
    //                 return $profit->date->month == $currentMonth && $profit->date->day == $currentDay;
    //             })->sum('profit');
    //          $checkoutStats = Checkout::where('seller_id',auth('seller')->user()->id)->select(DB::raw('
    //             SUM(CASE WHEN status = "Completed" THEN 1 ELSE 0 END) as completed_count,
    //             SUM(CASE WHEN status = "Pending" THEN 1 ELSE 0 END) as pending_count
    //         '))
    //         ->first();

    //     $checkoutCompleted = $checkoutStats->completed_count;
    //     $checkoutPending = $checkoutStats->pending_count;

    //             $completedArray=$this->getCompletedOrderStatusForSeller();
    //             $pendingArray=$this->getPendingOrderStatusForSeller();

    //             $currentYear = date('Y');
    //             $years = [$currentYear - 4, $currentYear - 3, $currentYear - 2, $currentYear - 1, $currentYear];
    // $yearGraph=$this->getProfitForYear();
    //             $salesData = $this->getSalesDataForFiveYear($years,$currentYear,$profitOfYear);
    //         }
    //     return view('admin.index',get_defined_vars());
    //     }
    // public function __invoke(){
    // dd($this->adminRepository->index());
    //  $this->adminRepository->index();
    // return $this->adminRepository->index();
    // return view('admin.index',get_defined_vars());
    // return view('admin.index',$this->adminRepository->index());

    // }
    // public function __invoke(){
    //     // dd($this->profitService->currentMonth);
    //     $user = auth()->user();
    //     $sellerId = null;

    //     if (auth('seller')->check()) {
    //         $sellerId = auth('seller')->user()->id;
    //         $completedArray = $this->getCompletedOrderStatusForSeller();
    //         $pendingArray = $this->getPendingOrderStatusForSeller();
    //     }
    //     else{
    //         $completedArray = $this->getCompletedOrderStatusForAdmin();
    //         $pendingArray = $this->getPendingOrderStatusForAdmin();

    //     }

    //     $profitData = $this->profitService->getProfitData($sellerId);
    //     $checkoutStats = $this->profitService->getCheckoutStats($sellerId);
    //     $years = $this->profitService->getYears();

    //     // Handle additional logic if needed
    //     $yearGraph = $this->getProfitForYear();
    //     $salesData = $this->getSalesDataForFiveYear($years, $this->profitService->currentYear, $profitData['profitOfYear']);

    //     return view('admin.index', array_merge($profitData, $checkoutStats, [
    //         'completedArray' => $completedArray,
    //         'pendingArray' => $pendingArray,
    //         'years' => $years,
    //         'yearGraph' => $yearGraph,
    //         'salesData' => $salesData
    //     ]));
    // }

}
