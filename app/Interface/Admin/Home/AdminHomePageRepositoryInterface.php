<?php

namespace App\Interface\Admin\Home;
// use App\Interface\Admin\Home\AdminHomePageRepositoryInterface;

interface AdminHomePageRepositoryInterface
{
    public function index();
public function     getProfitsForYear($year, $sellerId = null);
public function getProfitsForMonth($year, $month, $sellerId = null);
public function getProfitsForDay($year, $month, $day, $sellerId = null);
public function getCheckoutStats();
}
