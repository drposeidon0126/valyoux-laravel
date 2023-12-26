<?php $__env->startSection('title'); ?>
<?php echo app('translator')->get('translation.Register'); ?>
<?php $__env->stopSection(); ?>

<?php
use App\Models\Country;
$country = Country::all();
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2-rc.1/css/select2.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css" rel="stylesheet" />


<body>

    <style>
        .custom-control-label {
            /* padding-top: 4px; */
        }
    </style>
    <?php $__env->startSection('content'); ?>



    

    <div class="row logo-div">
        <div class="col-md-5 col-lg-3">
            <a href="<?php echo e(url('/')); ?>"> <img src="<?php echo e(asset('assets/images/valyou_x_black_logo.svg')); ?>" alt=""
                    class="img-fluid logo-img"></a>
        </div>
    </div>
    <div class="flex h-min80">
        <div class="container m-auto w-min80">
            <div class="row mx-auto">
                <div class="col-md-6 col-sm-12 col-xs-12 flex">
                    <div class="pl-3 m-auto">
                        <p class="font-weight-bold intro-text">Welcome to <span class="financial_stk">Valyou X</span>
                        </p>
                        <p class="lead font-weight-bold text-darkred">Be the first to know when we launch!</p>
                        <div class="lead ms_desc">If you’re interested in participating as an early adopter, you can
                            fill out the survey and apply to get exclusive access. We have over 50,000+ in our email
                            list would you like to skip the queue?</div>
                        <br>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 ">
                    <div class="p-4">
                        <form method="POST" class="form-horizontal mt-4" action="<?php echo e(route('register')); ?>"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" id="timezone" name="timezone" value="">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        value="<?php echo e(old('first_name')); ?>" required name="first_name" id="first_name"
                                        placeholder="<?php echo e(ucwords(str_replace('_',' ','first_name'))); ?>">
                                    <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        value="<?php echo e(old('last_name')); ?>" required name="last_name" id="last_name"
                                        placeholder="<?php echo e(ucwords(str_replace('_',' ','last_name'))); ?>">
                                    <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    value="<?php echo e(old('email')); ?>" id="useremail" name="email" required
                                    placeholder="Email Address">
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="password" required id="userpassword" placeholder="Choose Password">
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="form-group col-md-6">
                                    <input id="password-confirm" type="password" name="password_confirmation"
                                        class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required
                                        placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control <?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    value="<?php echo e(old('phone_number')); ?>" id="phone_number" name="phone_number" required
                                    placeholder="Phone number">
                                <?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group">
                                <input type="text" max="<?php echo e(date('m/d/Y')); ?>"
                                    class="form-control <?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="dob" required
                                    id="datepicker" placeholder="Date of Birth" value="<?php echo e(old('dob')); ?>"
                                    onmouseenter="(this.type='date')" onblur="if(this.value==''){this.type='text'}">
                                <!-- <input type="text" max="<?php echo e(date('m/d/Y')); ?>" class="form-control <?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="dob" required id="datepicker1" placeholder="Date of Birth" value="<?php echo e(old('dob')); ?>" readonly="true" onfocus="this.removeAttribute('readonly'); this.type='date';this.setAttribute('onfocus','');this.blur();this.focus();" onblur="if(this.value==''){this.type='text'}" > -->
                                <?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group">
                                <div class="custom-file">
                                    <select id="countries" class="form-control" name="country">
                                        <option></option>
                                    </select>
                                  
                                    <?php $__errorArgs = ['avatar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="form-group">


                                <div class="card upload-avatar">
                                    <div class="body ">
                                        <input type="file" id="name" class="dropify" name="avatar" required
                                            accept=".png,.jpeg,.jpg" data-default-file=""
                                            data-allowed-file-extensions='["png", "jpg", "jpeg"]' />
                                        <?php $__errorArgs = ['avatar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-red"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" value="1" class="custom-control-input"
                                        name="customControlInline" id="customControlInline" required>
                                    <label class="custom-control-label register" for="customControlInline">By
                                        registering I
                                        agree to the Valyou X. <a href="#" class="text-primary">Terms of Use</a></label>
                                </div>

                                <div class="mt-4">
                                    <button type="submit" width="100%"
                                        class="btn btn-primary w-full b-shadow font-weight-bold mt-2 mb-5">SIGN
                                        UP</button>
                                </div>

                        </form>
                        <p class="lead text-center font-weight-bold">Already have an account ?<a
                                href="<?php echo e(url('login')); ?>" class="font-weight-bold text-primary"> Login now </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- file upload -->
    <script src="<?php echo e(URL::asset('assets/libs/dropify/js/dropify.js')); ?>"></script>
    <script>
        $(function () {
            $('.dropify').dropify({
                messages: {
                    'default': 'Upload your profile image',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong happended.'
                }
            });
        })
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2-rc.1/js/select2.min.js"
        type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            var options = [
                { id: 'AF', text: 'Afghanistan' }, { id: 'AX', text: 'Aland Islands' }, { id: 'AL', text: 'Albania' }, { id: 'DZ', text: 'Algeria' }, { id: 'AS', text: 'American Samoa' },
                { id: 'AD', text: 'Andorra' }, { id: 'AO', text: 'Angola' },
                { id: 'AI', text: 'Anguilla' }, { id: 'AQ', text: 'Antarctica' }, { id: 'AG', text: 'Antigua And Barbuda' },
                { id: 'AR', text: 'Argentina' }, { id: 'AM', text: 'Armenia' }, { id: 'AW', text: 'Aruba' },
                { id: 'AU', text: 'Australia' }, { id: 'AT', text: 'Austria' }, { id: 'AZ', text: 'Azerbaijan' }, { id: 'BS', text: 'Bahamas' }, { id: 'BH', text: 'Bahrain' }, { id: 'BD', text: 'Bangladesh' }, { id: 'BB', text: 'Barbados' }, { id: 'BY', text: 'Belarus' }, { id: 'BE', text: 'Belgium' },
                { id: 'BZ', text: 'Belize' }, { id: 'BJ', text: 'Benin' },
                { id: 'BM', text: 'Bermuda' }, { id: 'BT', text: 'Bhutan' },
                { id: 'BO', text: 'Bolivia' }, { id: 'BA', text: 'Bosnia And Herzegovina' }, { id: 'BW', text: 'Botswana' }, { id: 'BV', text: 'Bouvet Island' }, { id: 'BR', text: 'Brazil' },
                { id: 'IO', text: 'British Indian Ocean Territory' }, { id: 'BN', text: 'Brunei Darussalam' }, { id: 'BG', text: 'Bulgaria' }, { id: 'BF', text: 'Burkina Faso' }, { id: 'BI', text: 'Burundi' }, { id: 'KH', text: 'Cambodia' }, { id: 'CM', text: 'Cameroon' }, { id: 'CA', text: 'Canada' },
                { id: 'CV', text: 'Cape Verde' }, { id: 'KY', text: 'Cayman Islands' }, { id: 'CF', text: 'Central African Republic' }, { id: 'TD', text: 'Chad' }, { id: 'CL', text: 'Chile' }, { id: 'CN', text: 'China' }, { id: 'CX', text: 'Christmas Island' }, { id: 'CC', text: 'Cocos (Keeling) Islands' }, { id: 'CO', text: 'Colombia' }, { id: 'KM', text: 'Comoros' }, { id: 'CG', text: 'Congo' }, { id: 'CD', text: 'Congo, Democratic Republic Of' }, { id: 'CK', text: 'Cook Islands' }, { id: 'CR', text: 'Costa Rica' }, { id: 'CI', text: 'Cote D\'Ivoire' }, { id: 'HR', text: 'Croatia' },
                { id: 'CU', text: 'Cuba' }, { id: 'CY', text: 'Cyprus' },
                { id: 'CZ', text: 'Czech Republic' }, { id: 'DK', text: 'Denmark' }, { id: 'DJ', text: 'Djibouti' }, { id: 'DM', text: 'Dominica' }, { id: 'DO', text: 'Dominican Republic' },
                { id: 'EC', text: 'Ecuador' }, { id: 'EG', text: 'Egypt' },
                { id: 'SV', text: 'El Salvador' }, { id: 'GQ', text: 'Equatorial Guinea' }, { id: 'ER', text: 'Eritrea' },
                { id: 'EE', text: 'Estonia' }, { id: 'ET', text: 'Ethiopia' }, { id: 'FK', text: 'Falkland Islands (Malvinas)' },
                { id: 'FO', text: 'Faroe Islands' }, { id: 'FJ', text: 'Fiji' }, { id: 'FI', text: 'Finland' }, { id: 'FR', text: 'France' }, { id: 'GF', text: 'French Guiana' }, { id: 'PF', text: 'French Polynesia' }, { id: 'TF', text: 'French Southern Territories' }, { id: 'GA', text: 'Gabon' }, { id: 'GM', text: 'Gambia' }, { id: 'GE', text: 'Georgia' }, { id: 'DE', text: 'Germany' }, { id: 'GH', text: 'Ghana' }, { id: 'GI', text: 'Gibraltar' }, { id: 'GR', text: 'Greece' },
                { id: 'GL', text: 'Greenland' }, { id: 'GD', text: 'Grenada' }, { id: 'GP', text: 'Guadeloupe' }, { id: 'GU', text: 'Guam' }, { id: 'GT', text: 'Guatemala' }, { id: 'GG', text: 'Guernsey' }, { id: 'GN', text: 'Guinea' }, { id: 'GW', text: 'Guinea-Bissau' }, { id: 'GY', text: 'Guyana' },
                { id: 'HT', text: 'Haiti' }, { id: 'HM', text: 'Heard Island & Mcdonald Islands' }, { id: 'VA', text: 'Holy See (Vatican City State)' }, { id: 'HN', text: 'Honduras' },
                { id: 'HK', text: 'Hong Kong' }, { id: 'HU', text: 'Hungary' }, { id: 'IS', text: 'Iceland' },
                { id: 'IN', text: 'India' }, { id: 'ID', text: 'Indonesia' },
                { id: 'IR', text: 'Iran, Islamic Republic Of' }, { id: 'IQ', text: 'Iraq' }, { id: 'IE', text: 'Ireland' }, { id: 'IM', text: 'Isle Of Man' }, { id: 'IL', text: 'Israel' },
                { id: 'IT', text: 'Italy' }, { id: 'JM', text: 'Jamaica' },
                { id: 'JP', text: 'Japan' }, { id: 'JE', text: 'Jersey' },
                { id: 'JO', text: 'Jordan' }, { id: 'KZ', text: 'Kazakhstan' }, { id: 'KE', text: 'Kenya' }, { id: 'KI', text: 'Kiribati' }, { id: 'KR', text: 'Korea' }, { id: 'KW', text: 'Kuwait' }, { id: 'KG', text: 'Kyrgyzstan' }, { id: 'LA', text: 'Lao People\'s Democratic Republic' }, { id: 'LV', text: 'Latvia' }, { id: 'LB', text: 'Lebanon' }, { id: 'LS', text: 'Lesotho' }, { id: 'LR', text: 'Liberia' }, { id: 'LY', text: 'Libyan Arab Jamahiriya' }, { id: 'LI', text: 'Liechtenstein' }, { id: 'LT', text: 'Lithuania' }, { id: 'LU', text: 'Luxembourg' }, { id: 'MO', text: 'Macao' },
                { id: 'MK', text: 'Macedonia' }, { id: 'MG', text: 'Madagascar' }, { id: 'MW', text: 'Malawi' }, { id: 'MY', text: 'Malaysia' }, { id: 'MV', text: 'Maldives' },
                { id: 'ML', text: 'Mali' }, { id: 'MT', text: 'Malta' },
                { id: 'MH', text: 'Marshall Islands' }, { id: 'MQ', text: 'Martinique' }, { id: 'MR', text: 'Mauritania' }, { id: 'MU', text: 'Mauritius' }, { id: 'YT', text: 'Mayotte' },
                { id: 'MX', text: 'Mexico' }, { id: 'FM', text: 'Micronesia, Federated States Of' }, { id: 'MD', text: 'Moldova' }, { id: 'MC', text: 'Monaco' }, { id: 'MN', text: 'Mongolia' }, { id: 'ME', text: 'Montenegro' }, { id: 'MS', text: 'Montserrat' }, { id: 'MA', text: 'Morocco' }, { id: 'MZ', text: 'Mozambique' }, { id: 'MM', text: 'Myanmar' },
                { id: 'NA', text: 'Namibia' }, { id: 'NR', text: 'Nauru' },
                { id: 'NP', text: 'Nepal' }, { id: 'NL', text: 'Netherlands' }, { id: 'AN', text: 'Netherlands Antilles' },
                { id: 'NC', text: 'New Caledonia' }, { id: 'NZ', text: 'New Zealand' }, { id: 'NI', text: 'Nicaragua' }, { id: 'NE', text: 'Niger' }, { id: 'NG', text: 'Nigeria' }, { id: 'NU', text: 'Niue' }, { id: 'NF', text: 'Norfolk Island' }, { id: 'MP', text: 'Northern Mariana Islands' }, { id: 'NO', text: 'Norway' }, { id: 'OM', text: 'Oman' }, { id: 'PK', text: 'Pakistan' }, { id: 'PW', text: 'Palau' }, { id: 'PS', text: 'Palestinian Territory, Occupied' }, { id: 'PA', text: 'Panama' }, { id: 'PG', text: 'Papua New Guinea' }, { id: 'PY', text: 'Paraguay' }, { id: 'PE', text: 'Peru' },
                { id: 'PH', text: 'Philippines' }, { id: 'PN', text: 'Pitcairn' }, { id: 'PL', text: 'Poland' }, { id: 'PT', text: 'Portugal' }, { id: 'PR', text: 'Puerto Rico' }, { id: 'QA', text: 'Qatar' }, { id: 'RE', text: 'Reunion' },
                { id: 'RO', text: 'Romania' }, { id: 'RU', text: 'Russian Federation' }, { id: 'RW', text: 'Rwanda' }, { id: 'BL', text: 'Saint Barthelemy' }, { id: 'SH', text: 'Saint Helena' },
                { id: 'KN', text: 'Saint Kitts And Nevis' }, { id: 'LC', text: 'Saint Lucia' }, { id: 'MF', text: 'Saint Martin' },
                { id: 'PM', text: 'Saint Pierre And Miquelon' }, { id: 'VC', text: 'Saint Vincent And Grenadines' }, { id: 'WS', text: 'Samoa' }, { id: 'SM', text: 'San Marino' }, { id: 'ST', text: 'Sao Tome And Principe' }, { id: 'SA', text: 'Saudi Arabia' }, { id: 'SN', text: 'Senegal' }, { id: 'RS', text: 'Serbia' }, { id: 'SC', text: 'Seychelles' }, { id: 'SL', text: 'Sierra Leone' }, { id: 'SG', text: 'Singapore' }, { id: 'SK', text: 'Slovakia' }, { id: 'SI', text: 'Slovenia' },
                { id: 'SB', text: 'Solomon Islands' }, { id: 'SO', text: 'Somalia' }, { id: 'ZA', text: 'South Africa' }, { id: 'GS', text: 'South Georgia And Sandwich Isl.' }, { id: 'ES', text: 'Spain' }, { id: 'LK', text: 'Sri Lanka' },
                { id: 'SD', text: 'Sudan' }, { id: 'SR', text: 'Suriname' },
                { id: 'SJ', text: 'Svalbard And Jan Mayen' }, { id: 'SZ', text: 'Swaziland' }, { id: 'SE', text: 'Sweden' }, { id: 'CH', text: 'Switzerland' }, { id: 'SY', text: 'Syrian Arab Republic' }, { id: 'TW', text: 'Taiwan' }, { id: 'TJ', text: 'Tajikistan' }, { id: 'TZ', text: 'Tanzania' },
                { id: 'TH', text: 'Thailand' }, { id: 'TL', text: 'Timor-Leste' }, { id: 'TG', text: 'Togo' }, { id: 'TK', text: 'Tokelau' }, { id: 'TO', text: 'Tonga' }, { id: 'TT', text: 'Trinidad And Tobago' }, { id: 'TN', text: 'Tunisia' },
                { id: 'TR', text: 'Turkey' }, { id: 'TM', text: 'Turkmenistan' }, { id: 'TC', text: 'Turks And Caicos Islands' }, { id: 'TV', text: 'Tuvalu' }, { id: 'UG', text: 'Uganda' }, { id: 'UA', text: 'Ukraine' }, { id: 'AE', text: 'United Arab Emirates' }, { id: 'GB', text: 'United Kingdom' }, { id: 'US', text: 'United States' }, { id: 'UM', text: 'United States Outlying Islands' }, { id: 'UY', text: 'Uruguay' }, { id: 'UZ', text: 'Uzbekistan' }, { id: 'VU', text: 'Vanuatu' }, { id: 'VE', text: 'Venezuela' }, { id: 'VN', text: 'Viet Nam' }, { id: 'VG', text: 'Virgin Islands, British' }, { id: 'VI', text: 'Virgin Islands, U.S.' }, { id: 'WF', text: 'Wallis And Futuna' }, { id: 'EH', text: 'Western Sahara' }, { id: 'YE', text: 'Yemen' },
                { id: 'ZM', text: 'Zambia' }, { id: 'ZW', text: 'Zimbabwe' }
            ];
            $('#countries').select2({
                placeholder: '-Select Country-',
                templateResult: formatCountry,
                data: options
            });

            function formatCountry(country) {
                if (!country.id) {
                    return country.text;
                }
                var $country = $(
                    '<span class="flag-icon flag-icon-' + country.id.toLowerCase() + ' flag-icon-squared"></span>' + '<span style="margin-left:10px;">' + country.text + '</span>'
                );
                return $country;
            };
        });
    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Administrator\Documents\Valyou X\valyoux_backend\valyoux_backend\resources\views/auth/register.blade.php ENDPATH**/ ?>