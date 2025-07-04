<?= $this->extend('layout_clear') ?>
<?= $this->section('content') ?>

<body class="min-h-screen bg-black text-white">
    <div class="flex min-h-screen">
        <!-- Left Side - Registration Form -->
        <div class="flex-1 flex items-center justify-center px-8 py-12 bg-black">
            <div class="w-full max-w-md space-y-8">
                <!-- Logo -->
                <div class="mb-12">
                    <h1 class="text-2xl font-bold tracking-wider">HYPEBEAST</h1>
                </div>
                
                <!-- Welcome Text -->
                <div class="space-y-2">
                    <h2 class="text-3xl font-bold text-white">Welcome to your page</h2>
                    <p class="text-gray-400">Please enter your details</p>
                </div>
                
                <!-- Registration Form -->
                <?= form_open('register', ['class' => '']) ?>

                <div class="space-y-6 mt-8">
                    <?= form_input([
                        'type' => 'email',
                        'id' => 'email',
                        'name' => 'email',
                        'placeholder' => 'Email',
                        'class' => 'w-full bg-transparent border-0 border-b border-gray-600 pb-2 text-white placeholder-gray-400 focus:border-white focus:outline-none transition-colors',
                        'required' => true
                    ]) ?>
                </div>

                <div class="space-y-6 mt-8">
                    <?= form_input([
                        'type' => 'text',
                        'id' => 'username',
                        'name' => 'username',
                        'placeholder' => 'Username',
                        'class' => 'w-full bg-transparent border-0 border-b border-gray-600 pb-2 text-white placeholder-gray-400 focus:border-white focus:outline-none transition-colors',
                        'required' => true
                    ]) ?>
                </div>

                <div class="space-y-6 mt-8">
                    <?= form_password([
                        'id' => 'password',
                        'name' => 'password',
                        'placeholder' => 'Password',
                        'class' => 'w-full bg-transparent border-0 border-b border-gray-600 pb-2 text-white placeholder-gray-400 focus:border-white focus:outline-none transition-colors',
                        'required' => true
                    ]) ?>
                </div>

                    <!-- Submit Button -->
                    <button 
                        <?= form_submit('submit', 'Login', ['class' => 'w-full bg-white text-black py-3 px-4 rounded-lg font-medium hover:bg-gray-100 transition-colors mt-8']) ?>
                        Register
                    </button>
                    
                    <!-- Login Link -->
                    <p class="text-center text-gray-400 mt-4">
                        Already have an account? 
                        <a href="login" class="text-white hover:underline">Log in</a>
                    </p>
                <?= form_close() ?>
            </div>
        </div>
        
        <!-- Right Side - Image -->
        <div class="flex-1 relative overflow-hidden bg-black">
            <img 
                src="<?= base_url('./hypebeast/img/login.png') ?>" 
                alt="Fashion model in cream cardigan" 
                class="max-w-[776px] w-full h-auto object-cover"
            >
        </div>
    </div>
    
    <!-- Mobile Responsive Adjustments -->
    <style>
        @media (max-width: 768px) {
            .flex {
                flex-direction: column;
            }
            .flex-1:last-child {
                min-height: 40vh;
            }
        }
    </style>
</body>

<?= $this->endSection() ?>