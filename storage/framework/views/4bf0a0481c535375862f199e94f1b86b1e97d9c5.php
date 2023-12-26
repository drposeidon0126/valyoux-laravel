<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo e(config('app.name')); ?> - Authorization</title>

    <!-- Styles -->
    <link href="<?php echo e(asset('/css/app.css')); ?>" rel="stylesheet">

    <style>
        .passport-authorize .container {
            margin-top: 30px;
        }

        .passport-authorize .scopes {
            margin-top: 20px;
        }

        .passport-authorize .buttons {
            margin-top: 25px;
            text-align: center;
        }

        .passport-authorize .btn {
            width: 125px;
        }

        .passport-authorize .btn-approve {
            margin-right: 15px;
        }

        .passport-authorize form {
            display: inline;
        }
    </style>
</head>
<body class="passport-authorize">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        Authorization Request
                    </div>
                    <div class="card-body">
                        <!-- Introduction -->
                        <p><strong><?php echo e($client->name); ?></strong> is requesting permission to access your account.</p>

                        <!-- Scope List -->
                        <?php if(count($scopes) > 0): ?>
                            <div class="scopes">
                                    <p><strong>This application will be able to:</strong></p>

                                    <ul>
                                        <?php $__currentLoopData = $scopes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scope): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($scope->description); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                            </div>
                        <?php endif; ?>

                        <div class="buttons">
                            <!-- Authorize Button -->
                            <form method="post" action="<?php echo e(route('passport.authorizations.approve')); ?>">
                                <?php echo csrf_field(); ?>

                                <input type="hidden" name="state" value="<?php echo e($request->state); ?>">
                                <input type="hidden" name="client_id" value="<?php echo e($client->id); ?>">
                                <input type="hidden" name="auth_token" value="<?php echo e($authToken); ?>">
                                <button type="submit" class="btn btn-success btn-approve">Authorize</button>
                            </form>

                            <!-- Cancel Button -->
                            <form method="post" action="<?php echo e(route('passport.authorizations.deny')); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>

                                <input type="hidden" name="state" value="<?php echo e($request->state); ?>">
                                <input type="hidden" name="client_id" value="<?php echo e($client->id); ?>">
                                <input type="hidden" name="auth_token" value="<?php echo e($authToken); ?>">
                                <button class="btn btn-danger">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH /var/www/testvps-main/vendor/laravel/passport/resources/views/authorize.blade.php ENDPATH**/ ?>