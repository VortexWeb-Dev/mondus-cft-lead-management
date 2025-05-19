<!-- Header -->
<?php include 'includes/header.php'; ?>

<!-- Main Container -->
<div class="min-h-screen flex flex-col max-w-6xl mx-auto p-4 sm:p-6">
    <!-- Header -->
    <header class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-xl sm:text-2xl font-bold text-gray-900">Mondus | CFT</h1>
            <p class="text-sm text-gray-500">Lead Assignment Dashboard</p>
        </div>
        <button id="createBtn" class="bg-gray-900 text-white px-3 py-2 sm:px-4 sm:py-2 rounded-lg hover:bg-gray-800 transition flex items-center gap-2 text-sm sm:text-base">
            <i class="fas fa-plus"></i> Create
        </button>
    </header>

    <!-- Stats Overview -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
        <div class="bg-white p-4 sm:p-6 rounded-lg shadow-sm">
            <h3 class="text-sm sm:text-base font-medium text-gray-700">Total Leads</h3>
            <div class="flex items-end mt-2">
                <span class="text-2xl sm:text-3xl font-bold text-gray-900" id="totalLeadsCount">17,500</span>
                <span class="text-xs sm:text-sm text-gray-500 ml-2">leads</span>
            </div>
        </div>
        <div class="bg-white p-4 sm:p-6 rounded-lg shadow-sm">
            <h3 class="text-sm sm:text-base font-medium text-gray-700">Assigned Leads</h3>
            <div class="flex items-end mt-2">
                <span class="text-2xl sm:text-3xl font-bold text-gray-900" id="assignedLeadsCount">12,000</span>
                <span class="text-xs sm:text-sm text-gray-500 ml-2">leads</span>
            </div>
        </div>
        <div class="bg-white p-4 sm:p-6 rounded-lg shadow-sm">
            <h3 class="text-sm sm:text-base font-medium text-gray-700">Remaining Leads</h3>
            <div class="flex items-end mt-2">
                <span class="text-2xl sm:text-3xl font-bold text-gray-900" id="remainingLeadsCount">5,500</span>
                <span class="text-xs sm:text-sm text-gray-500 ml-2">leads</span>
            </div>
        </div>
    </div>

    <!-- Lead Assignment Section -->
    <section class="bg-white rounded-lg shadow-sm mb-6">
        <div class="px-4 sm:px-6 py-4 border-b border-gray-200">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-900">Assign Leads</h2>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">No</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Connection</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Campaign</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Total</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Assigned</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Remaining</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Branch</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Agents</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Leads</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="bg-gray-50 table-row">
                        <td class="px-4 sm:px-6 py-4 text-sm font-medium text-gray-900">TOTAL</td>
                        <td class="px-4 sm:px-6 py-4 text-sm text-gray-500">
                            <select class="w-full p-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-gray-400 focus:border-gray-400">
                                <option>ALL</option>
                            </select>
                        </td>
                        <td class="px-4 sm:px-6 py-4 text-sm text-gray-500">
                            <select class="w-full p-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-gray-400 focus:border-gray-400">
                                <option>ALL</option>
                            </select>
                        </td>
                        <td class="px-4 sm:px-6 py-4 text-sm font-medium text-gray-900">17,500</td>
                        <td class="px-4 sm:px-6 py-4 text-sm text-gray-500">12,000</td>
                        <td class="px-4 sm:px-6 py-4 text-sm text-gray-500">5,500</td>
                        <td class="px-4 sm:px-6 py-4 text-sm text-gray-500">-</td>
                        <td class="px-4 sm:px-6 py-4 text-sm text-gray-500">-</td>
                        <td class="px-4 sm:px-6 py-4 text-sm text-gray-500">-</td>
                        <td class="px-4 sm:px-6 py-4 text-sm text-gray-500">-</td>
                    </tr>
                    <tr class="table-row">
                        <td class="px-4 sm:px-6 py-4 text-sm font-medium text-gray-900">01</td>
                        <td class="px-4 sm:px-6 py-4 text-sm text-gray-500">MAIN GSHEET</td>
                        <td class="px-4 sm:px-6 py-4 text-sm text-gray-500">
                            <select class="w-full p-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-gray-400 focus:border-gray-400">
                                <option>JK SURAT V3</option>
                            </select>
                        </td>
                        <td class="px-4 sm:px-6 py-4 text-sm font-medium text-gray-900">500</td>
                        <td class="px-4 sm:px-6 py-4 text-sm text-gray-500">200</td>
                        <td class="px-4 sm:px-6 py-4 text-sm text-gray-500">300</td>
                        <td class="px-4 sm:px-6 py-4 text-sm text-gray-500">
                            <select class="w-full p-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-gray-400 focus:border-gray-400">
                                <option>ALL</option>
                            </select>
                        </td>
                        <td class="px-4 sm:px-6 py-4 text-sm text-gray-500">
                            <select class="w-full p-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-gray-400 focus:border-gray-400">
                                <option>ALL</option>
                            </select>
                        </td>
                        <td class="px-4 sm:px-6 py-4 text-sm text-gray-500">
                            <input type="number" class="w-16 p-2 border border-gray-300, rounded-md text-sm focus:ring-2 focus:ring-gray-400 focus:border-gray-400" value="100">
                        </td>
                        <td class="px-4 sm:px-6 py-4 text-sm text-gray-500">
                            <label class="flex items-center">
                                <div class="relative inline-block w-10 h-6">
                                    <input type="checkbox" id="toggle1" class="sr-only peer" checked>
                                    <div class="w-10 h-6 bg-gray-300 rounded-full peer-checked:bg-green-500 transition-colors duration-300"></div>
                                    <div class="absolute left-0.5 top-0.5 w-5 h-5 bg-white rounded-full transition-transform duration-300 peer-checked:translate-x-4"></div>
                                </div>
                            </label>
                        </td>
                    </tr>
                    <!-- Additional rows (similar structure, omitted for brevity) -->
                </tbody>
            </table>
        </div>
    </section>

    <!-- Leads Reassignment Section -->
    <section class="bg-white rounded-lg shadow-sm">
        <div class="px-4 sm:px-6 py-4 border-b border-gray-200 bg-gray-900 text-white rounded-t-lg">
            <h2 class="text-lg sm:text-xl font-semibold">Reassign Leads</h2>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Status</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Connection</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Campaign</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Total</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Assigned</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Remaining</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Branch</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Agents</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Leads</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="table-row">
                        <td class="px-4 sm:px-6 py-4 text-sm text-gray-500">
                            <select class="w-full p-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-gray-400 focus:border-gray-400">
                                <option>ALL</option>
                            </select>
                        </td>
                        <td class="px-4 sm:px-6 py-4 text-sm text-gray-500">
                            <select class="w-full p-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-gray-400 focus:border-gray-400">
                                <option>ALL</option>
                            </select>
                        </td>
                        <td class="px-4 sm:px-6 py-4 text-sm text-gray-500">
                            <select class="w-full p-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-gray-400 focus:border-gray-400">
                                <option>JK SURAT V3</option>
                            </select>
                        </td>
                        <td class="px-4 sm:px-6 py-4 text-sm font-medium text-gray-900">500</td>
                        <td class="px-4 sm:px-6 py-4 text-sm text-gray-500">200</td>
                        <td class="px-4 sm:px-6 py-4 text-sm text-gray-500">300</td>
                        <td class="px-4 sm:px-6 py-4 text-sm text-gray-500">
                            <select class="w-full p-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-gray-400 focus:border-gray-400">
                                <option>ALL</option>
                            </select>
                        </td>
                        <td class="px-4 sm:px-6 py-4 text-sm text-gray-500">
                            <select class="w-full p-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-gray-400 focus:border-gray-400">
                                <option>ALL</option>
                            </select>
                        </td>
                        <td class="px-4 sm:px-6 py-4 text-sm text-gray-500">
                            <input type="number" class="w-16 p-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-gray-400 focus:border-gray-400" value="100">
                        </td>
                        <td class="px-4 sm:px-6 py-4 text-sm text-gray-500">
                            <label class="flex items-center">
                                <div class="relative inline-block w-10 h-6">
                                    <input type="checkbox" id="toggle1" class="sr-only peer">
                                    <div class="w-10 h-6 bg-gray-300 rounded-full peer-checked:bg-green-500 transition-colors duration-300"></div>
                                    <div class="absolute left-0.5 top-0.5 w-5 h-5 bg-white rounded-full transition-transform duration-300 peer-checked:translate-x-4"></div>
                                </div>
                            </label>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Footer -->
    <footer class="mt-8 text-center text-sm text-gray-500">
        © <a href="http://vortexweb.org" class="hover:underline">VortexWeb</a> 2025
    </footer>
</div>

<!-- Modal -->
<div id="createModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg max-w-md w-full p-6 modal-enter">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-medium text-gray-900">Create New Connection</h3>
            <button id="closeCreateModal" class="text-gray-400 hover:text-gray-500">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="space-y-4">
            <!-- Source Type Selection -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Select Source Type</label>
                <div class="flex space-x-4">
                    <label class="inline-flex items-center">
                        <input type="radio" name="sourceType" value="csv" class="h-4 w-4 text-gray-900 focus:ring-gray-500 border-gray-300" checked>
                        <span class="ml-2 text-sm text-gray-700">CSV</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="sourceType" value="gsheet" class="h-4 w-4 text-gray-900 focus:ring-gray-500 border-gray-300">
                        <span class="ml-2 text-sm text-gray-700">Google Sheet</span>
                    </label>
                </div>
            </div>

            <!-- CSV Fields -->
            <div id="csvFields">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Upload CSV File</label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                            <i class="fas fa-file-csv text-gray-400 text-2xl mb-2"></i>
                            <div class="flex text-sm text-gray-600">
                                <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-gray-900 hover:text-gray-500">
                                    <span>Upload a file</span>
                                    <input id="file-upload" name="file-upload" type="file" class="sr-only" accept=".csv">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">CSV up to 10MB</p>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="csv-name" class="block text-sm font-medium text-gray-700 mb-1">Connection Name</label>
                    <input type="text" name="csv-name" id="csv-name" class="w-full p-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-gray-400 focus:border-gray-400" placeholder="Enter CSV connection name">
                </div>
            </div>

            <!-- Google Sheet Fields -->
            <div id="gsheetFields" class="hidden">
                <div>
                    <label for="campaign-name" class="block text-sm font-medium text-gray-700 mb-1">Campaign Name</label>
                    <input type="text" name="campaign-name" id="campaign-name" class="w-full p-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-gray-400 focus:border-gray-400" placeholder="Enter campaign name">
                </div>
            </div>

            <div class="flex justify-end pt-4">
                <button id="cancelCreateBtn" class="bg-white py-2 px-4 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-500 mr-3">
                    Cancel
                </button>
                <button id="submitCreateBtn" class="bg-gray-900 py-2 px-4 rounded-md text-sm font-medium text-white hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-500">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Toast -->
<div id="toastContainer" class="fixed top-4 right-4 space-y-2 z-50"></div>

<!-- Footer -->
<?php include 'includes/footer.php'; ?>