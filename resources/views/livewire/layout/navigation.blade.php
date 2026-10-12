<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    public function logout(Logout $logout): void
    {
        $logout();
        $this->redirect('/', navigate: true);
    }
}; ?>

<aside class="w-64 shrink-0 bg-gray-900 text-gray-100 min-h-screen p-5">
    <div class="mb-8">
        <h1 class="text-xl font-bold">Clinic Management</h1>
        <p class="text-sm text-gray-400">System</p>
    </div>

    <!-- Dashboard -->
    <div class="mb-6">
        <a href="{{ route('dashboard') }}"
           wire:navigate
           class="block rounded-lg px-3 py-2 bg-gray-800 text-white">
            Dashboard
        </a>
    </div>

    <!-- Patient Care -->
    <div class="mb-5">
        <h2 class="text-xs font-bold tracking-wider text-gray-400 mb-2">
            PATIENT CARE
        </h2>
        <div class="pl-3 space-y-2 text-sm text-gray-300">
            <p>Patients</p>
            <p>Appointments</p>
            <p>Encounters</p>
            <p>Medical Records</p>
        </div>
    </div>

    <!-- Clinical -->
    <div class="mb-5">
        <h2 class="text-xs font-bold tracking-wider text-gray-400 mb-2">
            CLINICAL
        </h2>
        <div class="pl-3 space-y-2 text-sm text-gray-300">
            <p>Prescriptions</p>
            <p>Laboratory</p>
            <p>Referrals</p>
        </div>
    </div>

    <!-- Operations -->
    <div class="mb-5">
        <h2 class="text-xs font-bold tracking-wider text-gray-400 mb-2">
            OPERATIONS
        </h2>
        <div class="pl-3 space-y-2 text-sm text-gray-300">
            <p>Billing</p>
            <p>Pharmacy</p>
            <p>Inventory</p>
        </div>
    </div>

    <!-- Reports -->
    <div class="mb-5">
        <h2 class="text-xs font-bold tracking-wider text-gray-400 mb-2">
            REPORTS
        </h2>
        <div class="pl-3 space-y-2 text-sm text-gray-300">
            <p>Patient Reports</p>
            <p>Clinical Reports</p>
            <p>Financial Reports</p>
        </div>
    </div>

    <!-- Administration -->
    <div class="mb-5">
        <h2 class="text-xs font-bold tracking-wider text-gray-400 mb-2">
            ADMINISTRATION
        </h2>
        <div class="pl-3 space-y-2 text-sm text-gray-300">
            <p>Users</p>
            <p>Roles &amp; Permissions</p>
            <p>Clinic Settings</p>
            <p>Audit Logs</p>
        </div>
    </div>

    <!-- User Account -->
    <div class="border-t border-gray-700 pt-4 mt-8">
        <p class="text-sm font-medium">
            {{ auth()->user()->name }}
        </p>
        <p class="text-xs text-gray-400 mb-3">
            {{ auth()->user()->email }}
        </p>

        <button wire:click="logout"
                class="w-full text-left rounded-lg px-3 py-2
                       text-sm text-gray-300 hover:bg-gray-800">
            Log Out
        </button>
    </div>
</aside>
