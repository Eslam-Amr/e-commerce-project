<?php

namespace App\Services\Admin\Home;

use App\Repository\Admin\Home\AdminHomePageRepository;
use Illuminate\Support\Carbon;

class AdminHomePageService
{
    public $profitRepository;
    public $currentDate;
    public $currentYear;
    public $currentMonth;
    public $currentDay;

    public function __construct(AdminHomePageRepository $profitRepository)
    {
        $this->profitRepository = $profitRepository;
        $this->currentDate = Carbon::now();
        $this->currentYear = $this->currentDate->year;
        $this->currentMonth = $this->currentDate->month;
        $this->currentDay = $this->currentDate->day;
    }

    public function getProfitData($sellerId = null)
    {
        $profits = $this->profitRepository->getProfitsForYear($this->currentYear, $sellerId);
        return [
            'sumOfProfit' => $profits->sum('profit'),
            'profitOfYear' => $profits->sum('profit'),
            'profitOfMonth' => $this->profitRepository->getProfitsForMonth($this->currentYear, $this->currentMonth, $sellerId)->sum('profit'),
            'profitOfDay' => $this->profitRepository->getProfitsForDay($this->currentYear, $this->currentMonth, $this->currentDay, $sellerId)->sum('profit'),
        ];
    }

    public function getCheckoutStats($sellerId = null)
    {
        $checkoutStats = $this->profitRepository->getCheckoutStats($sellerId);
        return [
            'checkoutCompleted' => $checkoutStats->completed_count,
            'checkoutPending' => $checkoutStats->pending_count,
        ];
    }

    public function getYears()
    {
        return [$this->currentYear - 4, $this->currentYear - 3, $this->currentYear - 2, $this->currentYear - 1, $this->currentYear];
    }
}
