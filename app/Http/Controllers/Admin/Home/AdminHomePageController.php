<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use App\Models\Product;
use App\Models\Profit;
use App\StautsArray;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminHomePageController extends Controller
{
    use StautsArray;
    /*
    public function __invoke()
    {
        return $this->__invoke();
    }*/
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        if (auth('admin')->check()) {
           $sumOfProfit = Profit::select('profit')->sum('profit');
            $profitOfYear = Profit::whereYear('date', Carbon::now()->format('Y'))->sum('profit');
            $profitOfMonth= Profit::whereYear('date', Carbon::now()->format('Y'))->whereMonth('date', Carbon::now()->format('m'))->sum('profit');
            $profitOfDay= Profit::whereYear('date', Carbon::now()->format('Y'))->whereMonth('date', Carbon::now()->format('m'))->whereDay('date', Carbon::now()->format('d'))->sum('profit');
            $checkoutCompleted = Checkout::where('status', 'Completed')->count();
            $checkoutPending = Checkout::where('status', 'Pending')->count();
            $completedArray=$this->getCompletedOrderStatusForAdmin();
            $pendingArray=$this->getPendingOrderStatusForAdmin();
            $currentYear = date('Y');
            $years = [$currentYear - 4, $currentYear - 3, $currentYear - 2, $currentYear - 1, $currentYear];
$yearGraph=[
    $this->getProfitValue($currentYear,'*','01'),
    $this->getProfitValue($currentYear,'*','02'),
    $this->getProfitValue($currentYear,'*','03'),
    $this->getProfitValue($currentYear,'*','04'),
    $this->getProfitValue($currentYear,'*','05'),
    $this->getProfitValue($currentYear,'*','06'),
    $this->getProfitValue($currentYear,'*','07'),
    $this->getProfitValue($currentYear,'*','08'),
    $this->getProfitValue($currentYear,'*','09'),
    $this->getProfitValue($currentYear,'*','10'),
    $this->getProfitValue($currentYear,'*','11'),
    $this->getProfitValue($currentYear,'*','12')
];
            $salesData = [
                $years[0] => $this->getProfitValue($currentYear-4)
                ,$years[1] => $this->getProfitValue($currentYear-3),
                $years[2] => $this->getProfitValue($currentYear-2),
                $years[3] => $this->getProfitValue($currentYear-1),
                $years[4] => $profitOfYear, // Replace with your actual logic to fetch sales data for each year
            ];
        }
        else if (auth('seller')->check()) {
            $profitQuery = Profit::select('profit')->where('seller_id', auth('seller')->user()->id);
            $sumOfProfit = $profitQuery->sum('profit');
            $profitOfYear = $profitQuery->whereYear('date', Carbon::now()->format('Y'))->sum('profit');
            $profitOfMonth= $profitQuery->whereYear('date', Carbon::now()->format('Y'))->whereMonth('date', Carbon::now()->format('m'))->sum('profit');
            $profitOfDay= $profitQuery->whereYear('date', Carbon::now()->format('Y'))->whereMonth('date', Carbon::now()->format('m'))->whereDay('date', Carbon::now()->format('d'))->sum('profit');
            $checkoutCompleted = Checkout::where('seller_id',auth()->user()->id)->where('status', 'Completed')->count();
            $checkoutPending = Checkout::where('seller_id',auth()->user()->id)->where('status', 'Pending')->count();
            $completedArray=$this->getCompletedOrderStatusForSeller();
            $pendingArray=$this->getPendingOrderStatusForSeller();

            $currentYear = date('Y');
            $years = [$currentYear - 4, $currentYear - 3, $currentYear - 2, $currentYear - 1, $currentYear];
            $yearGraph=[
                $this->getProfitValue($currentYear,auth('seller')->user()->id,'01'),
                $this->getProfitValue($currentYear,auth('seller')->user()->id,'02'),
                $this->getProfitValue($currentYear,auth('seller')->user()->id,'03'),
                $this->getProfitValue($currentYear,auth('seller')->user()->id,'04'),
                $this->getProfitValue($currentYear,auth('seller')->user()->id,'05'),
                $this->getProfitValue($currentYear,auth('seller')->user()->id,'06'),
                $this->getProfitValue($currentYear,auth('seller')->user()->id,'07'),
                $this->getProfitValue($currentYear,auth('seller')->user()->id,'08'),
                $this->getProfitValue($currentYear,auth('seller')->user()->id,'09'),
                $this->getProfitValue($currentYear,auth('seller')->user()->id,'10'),
                $this->getProfitValue($currentYear,auth('seller')->user()->id,'11'),
                $this->getProfitValue($currentYear,auth('seller')->user()->id,'12')
            ];
            $salesData = [
                $years[0] => $this->getProfitValue($currentYear-4,auth('seller')->user()->id)
               , $years[1] => $this->getProfitValue($currentYear-3,auth('seller')->user()->id),
                $years[2] => $this->getProfitValue($currentYear-2,auth('seller')->user()->id),
                $years[3] => $this->getProfitValue($currentYear-1,auth('seller')->user()->id),
                $years[4] => $profitOfYear, // Replace with your actual logic to fetch sales data for each year
            ];
        }

// dd( Profit::select('profit')->whereYear('date','*')->whereMonth('date','06')->sum('profit'));
    return view('admin.index',get_defined_vars());
    }
}
/*
// Current month
echo Carbon::now()->format('m'); // Outputs: 07 (for July)

// Current year
echo Carbon::now()->format('Y'); // Outputs: 2024

// Current day
echo Carbon::now()->format('d'); // Outputs: 18 (for the 18th day of the month)
*/
