<?= $this->extend('layoutAdmin') ?>
<?= $this->section('content') ?>        
        <!-- Main Content -->
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <!-- Today's Money -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600 mb-1">Today's Money</p>
                            <h3 class="text-2xl font-bold text-dark">$53,000</h3>
                            <p class="text-sm text-green-500">+55%</p>
                        </div>
                        <div class="w-12 h-12 bg-gradient-to-r from-primary to-secondary rounded-lg flex items-center justify-center">
                            <i class="fas fa-wallet text-white"></i>
                        </div>
                    </div>
                </div>

                <!-- Today's Users -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600 mb-1">Today's Users</p>
                            <h3 class="text-2xl font-bold text-dark">2,300</h3>
                            <p class="text-sm text-green-500">+3%</p>
                        </div>
                        <div class="w-12 h-12 bg-gradient-to-r from-primary to-secondary rounded-lg flex items-center justify-center">
                            <i class="fas fa-users text-white"></i>
                        </div>
                    </div>
                </div>

                <!-- New Clients -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600 mb-1">New Clients</p>
                            <h3 class="text-2xl font-bold text-dark">+3,462</h3>
                            <p class="text-sm text-red-500">-2%</p>
                        </div>
                        <div class="w-12 h-12 bg-gradient-to-r from-primary to-secondary rounded-lg flex items-center justify-center">
                            <i class="fas fa-user-plus text-white"></i>
                        </div>
                    </div>
                </div>

                <!-- Sales -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-600 mb-1">Sales</p>
                            <h3 class="text-2xl font-bold text-dark">$103,430</h3>
                            <p class="text-sm text-green-500">+5%</p>
                        </div>
                        <div class="w-12 h-12 bg-gradient-to-r from-primary to-secondary rounded-lg flex items-center justify-center">
                            <i class="fas fa-shopping-cart text-white"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Cards Row -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                <!-- Soft UI Dashboard Card -->
                <div class="bg-gradient-to-r from-primary to-secondary rounded-xl shadow-lg p-8 text-white relative overflow-hidden">
                    <div class="relative z-10">
                        <p class="text-sm opacity-90 mb-2">Built by developers</p>
                        <h3 class="text-2xl font-bold mb-4">Soft UI Dashboard</h3>
                        <p class="text-sm opacity-90 mb-6">From colors, cards, typography to complex elements, you will find the full documentation.</p>
                        <button class="text-white hover:underline">Read More</button>
                    </div>
                    <div class="absolute right-8 top-1/2 transform -translate-y-1/2">
                        <div class="w-24 h-32 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                            <i class="fas fa-rocket text-4xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Work with the rockets Card -->
                <div class="bg-gradient-to-r from-primary to-secondary rounded-xl shadow-lg p-8 text-white relative overflow-hidden">
                    <div class="relative z-10">
                        <h3 class="text-2xl font-bold mb-4">Work with the rockets</h3>
                        <p class="text-sm opacity-90 mb-6">Wealth creation is an evolutionarily recent positive-sum game. It is all about who take the opportunity first.</p>
                        <button class="text-white hover:underline">Read More</button>
                    </div>
                </div>
            </div>

            <!-- Charts Row -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Bar Chart -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="mb-6">
                        <h3 class="text-lg font-bold text-dark mb-2">Active Users</h3>
                        <p class="text-sm text-green-500">(+23%) than last week</p>
                    </div>
                    <div class="h-64 bg-secondary rounded-lg flex items-end justify-center p-4">
                        <!-- Simulated Bar Chart -->
                        <div class="flex items-end space-x-2 h-full">
                            <div class="w-8 bg-white rounded-t h-1/4"></div>
                            <div class="w-8 bg-white rounded-t h-3/4"></div>
                            <div class="w-8 bg-white rounded-t h-1/2"></div>
                            <div class="w-8 bg-white rounded-t h-2/3"></div>
                            <div class="w-8 bg-white rounded-t h-full"></div>
                            <div class="w-8 bg-white rounded-t h-1/3"></div>
                            <div class="w-8 bg-white rounded-t h-3/4"></div>
                            <div class="w-8 bg-white rounded-t h-2/3"></div>
                            <div class="w-8 bg-white rounded-t h-full"></div>
                        </div>
                    </div>
                    <div class="grid grid-cols-4 gap-4 mt-6">
                        <div>
                            <div class="flex items-center mb-2">
                                <div class="w-3 h-3 bg-primary rounded-full mr-2"></div>
                                <span class="text-sm text-gray-600">Users</span>
                            </div>
                            <p class="text-2xl font-bold text-dark">36K</p>
                        </div>
                        <div>
                            <div class="flex items-center mb-2">
                                <div class="w-3 h-3 bg-blue-500 rounded-full mr-2"></div>
                                <span class="text-sm text-gray-600">Clicks</span>
                            </div>
                            <p class="text-2xl font-bold text-dark">2m</p>
                        </div>
                        <div>
                            <div class="flex items-center mb-2">
                                <div class="w-3 h-3 bg-orange-500 rounded-full mr-2"></div>
                                <span class="text-sm text-gray-600">Sales</span>
                            </div>
                            <p class="text-2xl font-bold text-dark">435$</p>
                        </div>
                        <div>
                            <div class="flex items-center mb-2">
                                <div class="w-3 h-3 bg-red-500 rounded-full mr-2"></div>
                                <span class="text-sm text-gray-600">Items</span>
                            </div>
                            <p class="text-2xl font-bold text-dark">43</p>
                        </div>
                    </div>
                </div>

                <!-- Line Chart -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="mb-6">
                        <h3 class="text-lg font-bold text-dark mb-2">Sales overview</h3>
                        <p class="text-sm text-green-500">4% more in 2021</p>
                    </div>
                    <div class="h-64 relative">
                        <!-- Simulated Line Chart -->
                        <svg class="w-full h-full" viewBox="0 0 400 200">
                            <path d="M 0 150 Q 50 100 100 120 T 200 80 T 300 60 T 400 40" 
                                  stroke="#e91e63" stroke-width="3" fill="none"/>
                            <path d="M 0 180 Q 50 160 100 140 T 200 120 T 300 100 T 400 80" 
                                  stroke="#9c27b0" stroke-width="3" fill="none"/>
                            <path d="M 0 160 Q 50 140 100 160 T 200 140 T 300 120 T 400 100" 
                                  stroke="#344767" stroke-width="3" fill="none"/>
                        </svg>
                    </div>
                    <div class="flex justify-between text-xs text-gray-500 mt-4">
                        <span>Apr</span>
                        <span>May</span>
                        <span>Jun</span>
                        <span>Jul</span>
                        <span>Aug</span>
                        <span>Sep</span>
                        <span>Oct</span>
                        <span>Nov</span>
                        <span>Dec</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection() ?>