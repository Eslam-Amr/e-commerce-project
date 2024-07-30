<?php

namespace App;

use Carbon\Carbon;
use App\Models\Checkout;
use App\Models\Profit;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

trait StautsArray
{

// public function getProfitValue($year,$seller_id='*',$month='*')
// {
// if($seller_id == '*')
// return Profit::select('profit')->whereYear('date',$year)->whereMonth('date',$month)->sum('profit');
// else
//     return Profit::select('profit')->where('seller_id',$seller_id)->whereYear('date',$year)->whereMonth('date',$month)->sum('profit');

// }
public function getProfitValue($year, $seller_id = '*', $month = '*')
{
    $query = Profit::query();

    if ($seller_id !== '*') {
        $query->where('seller_id', $seller_id);
    }

    if ($month !== '*') {
        $query->whereMonth('date', $month);
    }

    return $query->whereYear('date', $year)->sum('profit');
}

public function getCompletedOrderStatusForSeller(){
    $completedCounts = Checkout::where('seller_id',auth('seller')->user()->id)->select(DB::raw('MONTH(created_at) as month, COUNT(*) as count'))
        ->where('status', 'Completed')
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->orderBy(DB::raw('MONTH(created_at)'))
        ->get()
        ->mapWithKeys(function ($item) {
            return [$item->month - 1 => $item->count];
        })
        ->toArray();

    // Ensure the array has 12 months, filling missing months with 0
    $completedCounts = array_replace(array_fill(0, 12, 0), $completedCounts);

    return $completedCounts;
}
// public function getCompletedOrderStatusForSeller()
// {
//   $completedCounts = [];

//     $sellerId = auth('seller')->user()->id;

//     foreach (range(1, 12) as $monthNumber) {

//         $completedCounts[$monthNumber-1] = Checkout::where('seller_id', $sellerId)
//             ->where('status', 'Completed')
//             ->whereMonth('created_at', $monthNumber)
//             ->count();
//   }

//     return $completedCounts;
// }
public function getPendingOrderStatusForSeller()
{
    $pendingCounts = Checkout::where('seller_id',auth('seller')->user()->id)->select(DB::raw('MONTH(created_at) as month, COUNT(*) as count'))
        ->where('status', 'Pending')
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->orderBy(DB::raw('MONTH(created_at)'))
        ->get()
        ->mapWithKeys(function ($item) {
            return [$item->month - 1 => $item->count];
        })
        ->toArray();

    // Ensure the array has 12 months, filling missing months with 0
    $pendingCounts = array_replace(array_fill(0, 12, 0), $pendingCounts);

    return $pendingCounts;
}
// public function getPendingOrderStatusForSeller()
// {
//   $pendingCounts = [];

//     $sellerId = auth('seller')->user()->id;

//     foreach (range(1, 12) as $monthNumber) {

//         $pendingCounts[$monthNumber-1] = Checkout::where('seller_id', $sellerId)
//             ->where('status', 'Pending')
//             ->whereMonth('created_at', $monthNumber)
//             ->count();
//   }

//     return $pendingCounts;
// }
// public function getCompletedOrderStatusForAdmin()
// {
//   $completedCounts = [];

//     foreach (range(1, 12) as $monthNumber) {

//         $completedCounts[$monthNumber-1] = Checkout::where('status', 'Completed')
//             ->whereMonth('created_at', $monthNumber)
//             ->count();
//   }

//     return $completedCounts;
// }
public function getCompletedOrderStatusForAdmin()
{
    $completedCounts = Checkout::select(DB::raw('MONTH(created_at) as month, COUNT(*) as count'))
        ->where('status', 'Completed')
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->orderBy(DB::raw('MONTH(created_at)'))
        ->get()
        ->mapWithKeys(function ($item) {
            return [$item->month - 1 => $item->count];
        })
        ->toArray();

    // Ensure the array has 12 months, filling missing months with 0
    $completedCounts = array_replace(array_fill(0, 12, 0), $completedCounts);

    return $completedCounts;
}
// public function getPendingOrderStatusForAdmin()
// {
//   $pendingCounts = [];


//     foreach (range(1, 12) as $monthNumber) {

//         $pendingCounts[$monthNumber-1] = Checkout::where('status', 'Pending')
//             ->whereMonth('created_at', $monthNumber)
//             ->count();
//   }

//     return $pendingCounts;
// }

public function getPendingOrderStatusForAdmin()
{
    $pendingCounts = Checkout::select(DB::raw('MONTH(created_at) as month, COUNT(*) as count'))
        ->where('status', 'Pending')
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->orderBy(DB::raw('MONTH(created_at)'))
        ->get()
        ->mapWithKeys(function ($item) {
            return [$item->month - 1 => $item->count];
        })
        ->toArray();

    // Ensure the array has 12 months, filling missing months with 0
    $pendingCounts = array_replace(array_fill(0, 12, 0), $pendingCounts);

    return $pendingCounts;
}

// public function getProfitForYear(){
//     $data = array_fill(0, 12, 0);
//     if(auth('seller')->user()!=null)
//     $profits=Profit::select('profit','date')->where('seller_id',auth()->user()->id)->whereYear('date','2024')->get();
// else
// $profits=Profit::select('profit','date')->whereYear('date','2024')->get();

//     foreach($profits as $profit){
//         $date = new DateTime($profit->date);
//         $date=$date->format('m');
//         if($date == '01')
//         $data[0]+=$profit->profit;
//     else if($date == '02')
//     $data[1]+=$profit->profit;
// else if($date == '03')
// $data[2]+=$profit->profit;
// else if($date == '04')
// $data[3]+=$profit->profit;
// else if($date == '05')
// $data[4]+=$profit->profit;
// else if($date == '06')
// $data[5]+=$profit->profit;
// else if($date == '07')
// $data[6]+=$profit->profit;
// else if($date == '08')
// $data[7]+=$profit->profit;
// else if($date == '09')
// $data[8]+=$profit->profit;
// else if($date == '10')
// $data[9]+=$profit->profit;
// else if($date == '11')
// $data[10]+=$profit->profit;
// else if($date == '12')
// $data[11]+=$profit->profit;
//     }
//     return $data;

// }

public function getProfitForYear()
{
    $year = '2024';
    $sellerId = Auth::guard('seller')->check() ? Auth::guard('seller')->user()->id : null;

    // Retrieve profits for the year, optionally filtered by seller
    $profits = Profit::select(DB::raw('MONTH(date) as month, SUM(profit) as total_profit'))
        ->when($sellerId, function ($query) use ($sellerId) {
            return $query->where('seller_id', $sellerId);
        })
        ->whereYear('date', $year)
        ->groupBy(DB::raw('MONTH(date)'))
        ->orderBy(DB::raw('MONTH(date)'))
        ->pluck('total_profit', 'month')
        ->toArray();

    // Initialize data array with zeroes for each month
    $data = array_fill(0, 12, 0);

    // Fill the data array with the profits
    foreach ($profits as $month => $totalProfit) {
        $data[$month - 1] = $totalProfit;
    }

    return $data;
}

public function getSalesDataForFiveYear($years, $currentYear, $profitOfYear)
{
    $salesData = [];

    foreach ($years as $index => $year) {
        // Adjust the year to fetch profit data for each year
        $salesData[$year] = $this->getProfitValue($year);
    }

    // Add the current year's profit
    $salesData[$currentYear] = $profitOfYear;

    return $salesData;
}

// public function getSalesDataForFiveYear($years,$currentYear,$profitOfYear){
//    return  [
//         $years[0] => $this->getProfitValue($currentYear-4)
//         ,$years[1] => $this->getProfitValue($currentYear-3),
//         $years[2] => $this->getProfitValue($currentYear-2),
//         $years[3] => $this->getProfitValue($currentYear-1),
//         $years[4] => $profitOfYear, // Replace with your actual logic to fetch sales data for each year
//     ];
// }
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
