<?= $this->extend('layout_clear') ?>
<?= $this->section('content') ?>
<?php
$username = [
    'name' => 'username',
    'id' => 'username',
    'class' => 'form-control'
];
$password = [
    'name' => 'password',
    'id' => 'password',
    'class' => 'form-control'
];
?>

<body class="min-h-screen bg-black text-white">
    <div class="flex min-h-screen">
        <!-- Left Side - Login Form -->
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
                
                <!-- Login Form -->
                    <?= form_open('login', ['class' => '']) ?>
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
                    
                    <!-- Remember Me Checkbox -->
                    <div class="flex items-center space-x-2 mt-4">
                        <input 
                            type="checkbox" 
                            id="remember" 
                            class="w-4 h-4 bg-transparent border border-gray-600 rounded focus:ring-white focus:ring-2 text-white"
                        >
                        <label for="remember" class="text-gray-400 text-sm">Remember Me</label>
                    </div>
                    
                    <!-- Submit Button -->
                    <button 
                        <?= form_submit('submit', 'Login', ['class' => 'w-full bg-white text-black py-3 px-4 rounded-lg font-medium hover:bg-gray-100 transition-colors mt-8']) ?>
                        Log In
                    </button>
                    
                    <!-- Register Link -->
                    <p class="text-center text-gray-400 mt-4">
                        haven't an account? 
                        <a href="register" class="text-white hover:underline">Register</a>
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
    
    <!-- Custom Checkbox Styling -->
    <style>
        /* Custom checkbox styling to match the design */
        input[type="checkbox"] {
            appearance: none;
            background-color: transparent;
            border: 1px solid #6b7280;
            width: 16px;
            height: 16px;
            border-radius: 2px;
            position: relative;
        }
        
        input[type="checkbox"]:checked {
            background-color: white;
            border-color: white;
        }
        
        input[type="checkbox"]:checked::after {
            content: '✓';
            position: absolute;
            top: -2px;
            left: 2px;
            color: black;
            font-size: 12px;
            font-weight: bold;
        }
        
        input[type="checkbox"]:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.3);
        }
        
        /* Mobile Responsive Adjustments */
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