<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-home-circle mr-2"></i><?php echo app('translator')->get('translation.Dashboard'); ?> <div
                                class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-dashboard">

                            <a href="index" class="dropdown-item"><?php echo app('translator')->get('translation.Default'); ?></a></a>
                            <a href="dashboard-saas" class="dropdown-item"><?php echo app('translator')->get('translation.Saas'); ?></a>
                            <a href="dashboard-crypto" class="dropdown-item"><?php echo app('translator')->get('translation.Crypto'); ?></a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-tone mr-2"></i><?php echo app('translator')->get('translation.UI_Elements'); ?> <div class="arrow-down">
                            </div>
                        </a> 

                        <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl"
                            aria-labelledby="topnav-uielement">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div>
                                        <a href="UI/ui-alerts" class="dropdown-item"><?php echo app('translator')->get('translation.Alerts'); ?></a>
                                        <a href="UI/ui-buttons" class="dropdown-item"><?php echo app('translator')->get('translation.Buttons'); ?></a>
                                        <a href="UI/ui-cards" class="dropdown-item"><?php echo app('translator')->get('translation.Cards'); ?></a>
                                        <a href="UI/ui-carousel" class="dropdown-item"><?php echo app('translator')->get('translation.Carousel'); ?></a>
                                        <a href="UI/ui-dropdowns" class="dropdown-item"><?php echo app('translator')->get('translation.Dropdowns'); ?></a>
                                        <a href="UI/ui-grid" class="dropdown-item"><?php echo app('translator')->get('translation.Grid'); ?></a>
                                        <a href="UI/ui-images" class="dropdown-item"><?php echo app('translator')->get('translation.Images'); ?></a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <a href="UI/ui-lightbox" class="dropdown-item"><?php echo app('translator')->get('translation.Lightbox'); ?></a>
                                        <a href="UI/ui-modals" class="dropdown-item"><?php echo app('translator')->get('translation.Modals'); ?></a>
                                        <a href="UI/ui-rangeslider"
                                            class="dropdown-item"><?php echo app('translator')->get('translation.Range_Slider'); ?></a>
                                        <a href="UI/ui-session-timeout"
                                            class="dropdown-item"><?php echo app('translator')->get('translation.Session_Timeout'); ?></a>
                                        <a href="UI/ui-progressbars"
                                            class="dropdown-item"><?php echo app('translator')->get('translation.Progress_Bars'); ?></a>
                                        <a href="UI/ui-sweet-alert"
                                            class="dropdown-item"><?php echo app('translator')->get('translation.Sweet_Alert'); ?></a>
                                        <a href="UI/ui-tabs-accordions"
                                            class="dropdown-item"><?php echo app('translator')->get('translation.Tabs_Accordions'); ?></a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <a href="UI/ui-typography"
                                            class="dropdown-item"><?php echo app('translator')->get('translation.Typography'); ?></a>
                                        <a href="UI/ui-video" class="dropdown-item"><?php echo app('translator')->get('translation.Video'); ?></a>
                                        <a href="UI/ui-general" class="dropdown-item"><?php echo app('translator')->get('translation.General'); ?></a>
                                        <a href="UI/ui-colors" class="dropdown-item"><?php echo app('translator')->get('translation.Colors'); ?></a>
                                        <a href="UI/ui-rating" class="dropdown-item"><?php echo app('translator')->get('translation.Rating'); ?></a>
                                        <a href="UI/ui-notifications"
                                            class="dropdown-item"><?php echo app('translator')->get('translation.Notifications'); ?></a>
                                        <a href="UI/ui-image-cropper"
                                            class="dropdown-item"><?php echo app('translator')->get('translation.Image_Cropper'); ?></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-customize mr-2"></i><?php echo app('translator')->get('translation.Apps'); ?> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-pages">

                            <a href="calendar" class="dropdown-item"><?php echo app('translator')->get('translation.Calendar'); ?></a>
                            <a href="chat"
                                class="dropdown-item"><?php echo app('translator')->get('translation.Chat'); ?></a>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo app('translator')->get('translation.Email'); ?> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-email">
                                    <a href="email-inbox" class="dropdown-item"><?php echo app('translator')->get('translation.Inbox'); ?></a>
                                    <a href="email-read" class="dropdown-item"><?php echo app('translator')->get('translation.Read_Email'); ?></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo app('translator')->get('translation.Ecommerce'); ?> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                    <a href="ecommerce-products" class="dropdown-item"><?php echo app('translator')->get('translation.Products'); ?></a>
                                    <a href="ecommerce-product-detail"
                                        class="dropdown-item"><?php echo app('translator')->get('translation.Product_Detail'); ?></a>
                                    <a href="ecommerce-orders" class="dropdown-item"><?php echo app('translator')->get('translation.Orders'); ?></a>
                                    <a href="ecommerce-customers"
                                        class="dropdown-item"><?php echo app('translator')->get('translation.Customers'); ?></a>
                                    <a href="ecommerce-cart" class="dropdown-item"><?php echo app('translator')->get('translation.Cart'); ?></a>
                                    <a href="ecommerce-checkout" class="dropdown-item"><?php echo app('translator')->get('translation.Checkout'); ?></a>
                                    <a href="ecommerce-shops" class="dropdown-item"><?php echo app('translator')->get('translation.Shops'); ?></a>
                                    <a href="ecommerce-add-product"
                                        class="dropdown-item"><?php echo app('translator')->get('translation.Add_Product'); ?></a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-crypto"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo app('translator')->get('translation.Crypto'); ?> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-crypto">
                                    <a href="crypto-wallet" class="dropdown-item"><?php echo app('translator')->get('translation.Wallet'); ?></a>
                                    <a href="crypto-buy-sell" class="dropdown-item"><?php echo app('translator')->get('translation.Buy_Sell'); ?></a>
                                    <a href="crypto-exchange" class="dropdown-item"><?php echo app('translator')->get('translation.Exchange'); ?></a>
                                    <a href="crypto-lending" class="dropdown-item"><?php echo app('translator')->get('translation.Lending'); ?></a>
                                    <a href="crypto-orders" class="dropdown-item"><?php echo app('translator')->get('translation.Orders'); ?></a>
                                    <a href="crypto-kyc-application"
                                        class="dropdown-item"><?php echo app('translator')->get('translation.KYC_Application'); ?></a>
                                    <a href="crypto-ico-landing"
                                        class="dropdown-item"><?php echo app('translator')->get('translation.ICO_Landing'); ?></a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-project"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo app('translator')->get('translation.Projects'); ?> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-project">
                                    <a href="projects-grid" class="dropdown-item"><?php echo app('translator')->get('translation.Projects_Grid'); ?></a>
                                    <a href="projects-list" class="dropdown-item"><?php echo app('translator')->get('translation.Projects_List'); ?></a>
                                    <a href="projects-overview"
                                        class="dropdown-item"><?php echo app('translator')->get('translation.Project_Overview'); ?></a>
                                    <a href="projects-create" class="dropdown-item"><?php echo app('translator')->get('translation.Create_New'); ?></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-task"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo app('translator')->get('translation.Tasks'); ?> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-task">
                                    <a href="tasks-list" class="dropdown-item"><?php echo app('translator')->get('translation.Task_List'); ?></a>
                                    <a href="tasks-kanban" class="dropdown-item"><?php echo app('translator')->get('translation.Kanban_Board'); ?></a>
                                    <a href="tasks-create" class="dropdown-item"><?php echo app('translator')->get('translation.Create_Task'); ?></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-contact"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo app('translator')->get('translation.Contacts'); ?> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-contact">
                                    <a href="contacts-grid" class="dropdown-item"><?php echo app('translator')->get('translation.User_Grid'); ?></a>
                                    <a href="contacts-list" class="dropdown-item"><?php echo app('translator')->get('translation.User_List'); ?></a>
                                    <a href="contacts-profile" class="dropdown-item"><?php echo app('translator')->get('translation.Profile'); ?></a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-collection mr-2"></i><?php echo app('translator')->get('translation.Components'); ?> <div
                                class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-components">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo app('translator')->get('translation.Forms'); ?> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-form">
                                    <a href="form/form-elements" class="dropdown-item"><?php echo app('translator')->get('translation.Elements'); ?></a>
                                    <a href="form/form-layouts" class="dropdown-item"><?php echo app('translator')->get('translation.Forms_Layouts'); ?></a>
                                    <a href="form/form-validation" class="dropdown-item"><?php echo app('translator')->get('translation.Validation'); ?></a>
                                    <a href="form/form-advanced" class="dropdown-item"><?php echo app('translator')->get('translation.Advanced'); ?></a>
                                    <a href="form/form-editors" class="dropdown-item"><?php echo app('translator')->get('translation.Editors'); ?></a>
                                    <a href="form/form-uploads" class="dropdown-item"><?php echo app('translator')->get('translation.File_Upload'); ?></a>
                                    <a href="form/form-xeditable" class="dropdown-item"><?php echo app('translator')->get('translation.X_editable'); ?></a>
                                    <a href="form/form-repeater" class="dropdown-item"><?php echo app('translator')->get('translation.Form_Repeater'); ?></a>
                                    <a href="form/form-wizard" class="dropdown-item"><?php echo app('translator')->get('translation.Wizard'); ?></a>
                                    <a href="form/form-mask" class="dropdown-item"><?php echo app('translator')->get('translation.Mask'); ?></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo app('translator')->get('translation.Tables'); ?> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-table">
                                    <a href="tables-basic" class="dropdown-item"><?php echo app('translator')->get('translation.Basic_Tables'); ?></a>
                                    <a href="tables-datatable"
                                        class="dropdown-item"><?php echo app('translator')->get('translation.Data_Tables'); ?></a>
                                    <a href="tables-responsive"
                                        class="dropdown-item"><?php echo app('translator')->get('translation.Responsive_Table'); ?></a>
                                    <a href="tables-editable"
                                        class="dropdown-item"><?php echo app('translator')->get('translation.Editable_Table'); ?></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo app('translator')->get('translation.Charts'); ?> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                    <a href="charts/charts-apex" class="dropdown-item"><?php echo app('translator')->get('translation.Apexcharts'); ?></a>
                                    <a href="charts/charts-echart" class="dropdown-item"><?php echo app('translator')->get('translation.ECharts'); ?></a>
                                    <a href="charts/charts-chartjs" class="dropdown-item"><?php echo app('translator')->get('translation.Chartjs'); ?></a>
                                    <a href="charts/charts-flot" class="dropdown-item"><?php echo app('translator')->get('translation.Flot'); ?></a>
                                    <a href="charts/charts-tui" class="dropdown-item"><?php echo app('translator')->get('translation.Toast_UI'); ?></a>
                                    <a href="charts/charts-knob" class="dropdown-item"><?php echo app('translator')->get('translation.Jquery'); ?></a>
                                    <a href="charts/charts-sparkline" class="dropdown-item"><?php echo app('translator')->get('translation.Sparkline'); ?></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo app('translator')->get('translation.Icons'); ?> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                    <a href="icons-boxicons" class="dropdown-item"><?php echo app('translator')->get('translation.Boxicons'); ?></a>
                                    <a href="icons-materialdesign"
                                        class="dropdown-item"><?php echo app('translator')->get('translation.Material_Design'); ?></a>
                                    <a href="icons-dripicons" class="dropdown-item"><?php echo app('translator')->get('translation.Dripicons'); ?></a>
                                    <a href="icons-fontawesome"
                                        class="dropdown-item"><?php echo app('translator')->get('translation.Font_awesome'); ?></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo app('translator')->get('translation.Maps'); ?> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-map">
                                    <a href="maps-google" class="dropdown-item"><?php echo app('translator')->get('translation.Google_Maps'); ?></a>
                                    <a href="maps-vector" class="dropdown-item"><?php echo app('translator')->get('translation.Vector_Maps'); ?></a>
                                    <a href="maps-leaflet" class="dropdown-item"><?php echo app('translator')->get('translation.Leaflet_Maps'); ?></a>
                                </div>
                            </div>
                        </div>
                    </li>



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-file mr-2"></i><?php echo app('translator')->get('translation.Extra_Pages'); ?><div class="arrow-down">
                            </div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-invoice"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo app('translator')->get('translation.Invoices'); ?> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-invoice">
                                    <a href="invoices-list" class="dropdown-item"><?php echo app('translator')->get('translation.Invoice_List'); ?></a>
                                    <a href="invoices-detail"
                                        class="dropdown-item"><?php echo app('translator')->get('translation.Invoice_Detail'); ?></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo app('translator')->get('translation.Authentication'); ?><div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                    <a href="auth-login" class="dropdown-item"><?php echo app('translator')->get('translation.Login'); ?></a>
                                    <a href="auth-register" class="dropdown-item"><?php echo app('translator')->get('translation.Register'); ?></a>
                                    <a href="auth-recoverpw"
                                        class="dropdown-item"><?php echo app('translator')->get('translation.Recover_Password'); ?></a>
                                    <a href="auth-lock-screen"
                                        class="dropdown-item"><?php echo app('translator')->get('translation.Lock_screen'); ?></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo app('translator')->get('translation.Utility'); ?> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                    <a href="pages-starter" class="dropdown-item"><?php echo app('translator')->get('translation.Starter_Page'); ?></a>
                                    <a href="pages-maintenance"
                                        class="dropdown-item"><?php echo app('translator')->get('translation.Maintenance'); ?></a>
                                    <a href="pages-comingsoon"
                                        class="dropdown-item"><?php echo app('translator')->get('translation.Coming_Soon'); ?></a>
                                    <a href="pages-timeline" class="dropdown-item"><?php echo app('translator')->get('translation.Timeline'); ?></a>
                                    <a href="pages-faqs" class="dropdown-item"><?php echo app('translator')->get('translation.FAQs'); ?></a>
                                    <a href="pages-pricing" class="dropdown-item"><?php echo app('translator')->get('translation.Pricing'); ?></a>
                                    <a href="pages-404" class="dropdown-item"><?php echo app('translator')->get('translation.Error_404'); ?></a>
                                    <a href="pages-500" class="dropdown-item"><?php echo app('translator')->get('translation.Error_500'); ?></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-layout mr-2"></i><?php echo app('translator')->get('translation.Layouts'); ?><div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="topnav-layout">
                            <a href="components/layouts-horizontal" class="dropdown-item"><?php echo app('translator')->get('translation.Horizontal'); ?></a>
                            <a href="index" class="dropdown-item"><?php echo app('translator')->get('translation.Vertical'); ?></a>
                            <a href="components/layouts-topbar-light" class="dropdown-item"><?php echo app('translator')->get('translation.Topbar_Light'); ?></a>
                            <a href="components/layouts-boxed-horizontal" class="dropdown-item"><?php echo app('translator')->get('translation.Boxed_Width'); ?></a>
                            <a href="components/layouts-horizontal-preloader" class="dropdown-item"><?php echo app('translator')->get('translation.Preloader'); ?></a>
                            <a href="components/layouts-colored-topbar" class="dropdown-item"><?php echo app('translator')->get('translation.Colored_Topbar'); ?></a>
                            <a href="components/layouts-scrollable-horizontal" class="dropdown-item"><?php echo app('translator')->get('translation.Scrollable'); ?></a>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
<?php /**PATH /var/www/testvps-main/resources/views/layouts/hor-menu.blade.php ENDPATH**/ ?>