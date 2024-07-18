<?php

namespace App;

use Carbon\Carbon;
use App\Models\Checkout;
use App\Models\Profit;

trait StautsArray
{

public function getProfitValue($year,$seller_id='*',$month='*')
{
if($seller_id == '*')
return Profit::select('profit')->whereYear('date',$year)->whereMonth('date',$month)->sum('profit');
else
    return Profit::select('profit')->where('seller_id',$seller_id)->whereYear('date',$year)->whereMonth('date',$month)->sum('profit');

}
public function getCompletedOrderStatusForSeller()
{
  $completedCounts = [];

    $sellerId = auth('seller')->user()->id;

    foreach (range(1, 12) as $monthNumber) {

        $completedCounts[$monthNumber-1] = Checkout::where('seller_id', $sellerId)
            ->where('status', 'Completed')
            ->whereMonth('created_at', $monthNumber)
            ->count();
  }

    return $completedCounts;
}
public function getPendingOrderStatusForSeller()
{
  $pendingCounts = [];

    $sellerId = auth('seller')->user()->id;

    foreach (range(1, 12) as $monthNumber) {

        $pendingCounts[$monthNumber-1] = Checkout::where('seller_id', $sellerId)
            ->where('status', 'Pending')
            ->whereMonth('created_at', $monthNumber)
            ->count();
  }

    return $pendingCounts;
}
public function getCompletedOrderStatusForAdmin()
{
  $completedCounts = [];

    foreach (range(1, 12) as $monthNumber) {

        $completedCounts[$monthNumber-1] = Checkout::where('status', 'Completed')
            ->whereMonth('created_at', $monthNumber)
            ->count();
  }

    return $completedCounts;
}
public function getPendingOrderStatusForAdmin()
{
  $pendingCounts = [];


    foreach (range(1, 12) as $monthNumber) {

        $pendingCounts[$monthNumber-1] = Checkout::where('status', 'Pending')
            ->whereMonth('created_at', $monthNumber)
            ->count();
  }

    return $pendingCounts;
}

// public function getOrderStatusData()
// {
//     $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

//     $pendingCounts = [];
//     $successCounts = [];
//     $failedCounts = [];

//     $sellerId = auth('seller')->user()->id;

//     foreach (range(1, 12) as $monthNumber) {
//         $pendingCounts[] = Checkout::where('seller_id', $sellerId)
//             ->where('status', 'Pending')
//             ->whereMonth('created_at', $monthNumber)
//             ->count();

//         $successCounts[] = Checkout::where('seller_id', $sellerId)
//             ->where('status', 'Success')
//             ->whereMonth('created_at', $monthNumber)
//             ->count();

//         $failedCounts[] = Checkout::where('seller_id', $sellerId)
//             ->where('status', 'Failed')
//             ->whereMonth('created_at', $monthNumber)
//             ->count();
//     }

//     return view('orderStatus', compact('months', 'pendingCounts', 'successCounts', 'failedCounts'));
// }





/*
public function __invoke()
    {
        $data = [
            'sumOfProfit' => $this->getSumOfProfit(),
            'profitOfYear' => $this->getProfitOfYear(),
            'profitOfMonth' => $this->getProfitOfMonth(),
            'profitOfDay' => $this->getProfitOfDay(),
            'checkoutCompleted' => $this->getCheckoutCompleted(),
            'checkoutPending' => $this->getCheckoutPending(),
            'completedArray' => auth('admin')->check() ? $this->getCompletedOrderStatus('admin') : $this->getCompletedOrderStatus('seller'),
            'pendingArray' => auth('admin')->check() ? $this->getPendingOrderStatus('admin') : $this->getPendingOrderStatus('seller'),
            'salesData' => $this->getSalesData(),
        ];

        return view('admin.index', $data);
    }

    protected function getSumOfProfit()
    {
        return Profit::sum('profit');
    }

    protected function getProfitOfYear()
    {
        return Profit::whereYear('date', Carbon::now()->format('Y'))->sum('profit');
    }

    protected function getProfitOfMonth()
    {
        return Profit::whereYear('date', Carbon::now()->format('Y'))
                     ->whereMonth('date', Carbon::now()->format('m'))
                     ->sum('profit');
    }

    protected function getProfitOfDay()
    {
        return Profit::whereDate('date', Carbon::now())->sum('profit');
    }

    protected function getCheckoutCompleted()
    {
        return Checkout::where('status', 'Completed')->count();
    }

    protected function getCheckoutPending()
    {
        return Checkout::where('status', 'Pending')->count();
    }

    protected function getCompletedOrderStatus($role)
    {
        $completedCounts = [];
        $query = Checkout::where('status', 'Completed');

        if ($role === 'seller') {
            $query->where('seller_id', auth('seller')->user()->id);
        }

        foreach (range(1, 12) as $monthNumber) {
            $completedCounts[$monthNumber - 1] = $query->whereMonth('created_at', $monthNumber)->count();
        }

        return $completedCounts;
    }

    protected function getPendingOrderStatus($role)
    {
        $pendingCounts = [];
        $query = Checkout::where('status', 'Pending');

        if ($role === 'seller') {
            $query->where('seller_id', auth('seller')->user()->id);
        }

        foreach (range(1, 12) as $monthNumber) {
            $pendingCounts[$monthNumber - 1] = $query->whereMonth('created_at', $monthNumber)->count();
        }

        return $pendingCounts;
    }

    protected function getSalesData()
    {
        $currentYear = date('Y');
        $years = [$currentYear - 4, $currentYear - 3, $currentYear - 2, $currentYear - 1, $currentYear];

        $salesData = [];
        foreach ($years as $year) {
            $salesData[$year] = $this->getYearProfitValue($year, auth('seller')->check() ? auth('seller')->user()->id : '*');
        }

        return $salesData;
    }

    protected function getYearProfitValue($year, $sellerId = '*')
    {
        return Profit::where('seller_id', $sellerId)
                     ->whereYear('date', $year)
                     ->sum('profit');
    }

*/
}
