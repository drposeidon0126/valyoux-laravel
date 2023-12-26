<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-home-circle mr-2"></i>@lang('translation.Dashboard') <div
                                class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-dashboard">

                            <a href="index" class="dropdown-item">@lang('translation.Default')</a></a>
                            <a href="dashboard-saas" class="dropdown-item">@lang('translation.Saas')</a>
                            <a href="dashboard-crypto" class="dropdown-item">@lang('translation.Crypto')</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-tone mr-2"></i>@lang('translation.UI_Elements') <div class="arrow-down">
                            </div>
                        </a> 

                        <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl"
                            aria-labelledby="topnav-uielement">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div>
                                        <a href="UI/ui-alerts" class="dropdown-item">@lang('translation.Alerts')</a>
                                        <a href="UI/ui-buttons" class="dropdown-item">@lang('translation.Buttons')</a>
                                        <a href="UI/ui-cards" class="dropdown-item">@lang('translation.Cards')</a>
                                        <a href="UI/ui-carousel" class="dropdown-item">@lang('translation.Carousel')</a>
                                        <a href="UI/ui-dropdowns" class="dropdown-item">@lang('translation.Dropdowns')</a>
                                        <a href="UI/ui-grid" class="dropdown-item">@lang('translation.Grid')</a>
                                        <a href="UI/ui-images" class="dropdown-item">@lang('translation.Images')</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <a href="UI/ui-lightbox" class="dropdown-item">@lang('translation.Lightbox')</a>
                                        <a href="UI/ui-modals" class="dropdown-item">@lang('translation.Modals')</a>
                                        <a href="UI/ui-rangeslider"
                                            class="dropdown-item">@lang('translation.Range_Slider')</a>
                                        <a href="UI/ui-session-timeout"
                                            class="dropdown-item">@lang('translation.Session_Timeout')</a>
                                        <a href="UI/ui-progressbars"
                                            class="dropdown-item">@lang('translation.Progress_Bars')</a>
                                        <a href="UI/ui-sweet-alert"
                                            class="dropdown-item">@lang('translation.Sweet_Alert')</a>
                                        <a href="UI/ui-tabs-accordions"
                                            class="dropdown-item">@lang('translation.Tabs_Accordions')</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <a href="UI/ui-typography"
                                            class="dropdown-item">@lang('translation.Typography')</a>
                                        <a href="UI/ui-video" class="dropdown-item">@lang('translation.Video')</a>
                                        <a href="UI/ui-general" class="dropdown-item">@lang('translation.General')</a>
                                        <a href="UI/ui-colors" class="dropdown-item">@lang('translation.Colors')</a>
                                        <a href="UI/ui-rating" class="dropdown-item">@lang('translation.Rating')</a>
                                        <a href="UI/ui-notifications"
                                            class="dropdown-item">@lang('translation.Notifications')</a>
                                        <a href="UI/ui-image-cropper"
                                            class="dropdown-item">@lang('translation.Image_Cropper')</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-customize mr-2"></i>@lang('translation.Apps') <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-pages">

                            <a href="calendar" class="dropdown-item">@lang('translation.Calendar')</a>
                            <a href="chat"
                                class="dropdown-item">@lang('translation.Chat')</a>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Email') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-email">
                                    <a href="email-inbox" class="dropdown-item">@lang('translation.Inbox')</a>
                                    <a href="email-read" class="dropdown-item">@lang('translation.Read_Email')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Ecommerce') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                    <a href="ecommerce-products" class="dropdown-item">@lang('translation.Products')</a>
                                    <a href="ecommerce-product-detail"
                                        class="dropdown-item">@lang('translation.Product_Detail')</a>
                                    <a href="ecommerce-orders" class="dropdown-item">@lang('translation.Orders')</a>
                                    <a href="ecommerce-customers"
                                        class="dropdown-item">@lang('translation.Customers')</a>
                                    <a href="ecommerce-cart" class="dropdown-item">@lang('translation.Cart')</a>
                                    <a href="ecommerce-checkout" class="dropdown-item">@lang('translation.Checkout')</a>
                                    <a href="ecommerce-shops" class="dropdown-item">@lang('translation.Shops')</a>
                                    <a href="ecommerce-add-product"
                                        class="dropdown-item">@lang('translation.Add_Product')</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-crypto"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Crypto') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-crypto">
                                    <a href="crypto-wallet" class="dropdown-item">@lang('translation.Wallet')</a>
                                    <a href="crypto-buy-sell" class="dropdown-item">@lang('translation.Buy_Sell')</a>
                                    <a href="crypto-exchange" class="dropdown-item">@lang('translation.Exchange')</a>
                                    <a href="crypto-lending" class="dropdown-item">@lang('translation.Lending')</a>
                                    <a href="crypto-orders" class="dropdown-item">@lang('translation.Orders')</a>
                                    <a href="crypto-kyc-application"
                                        class="dropdown-item">@lang('translation.KYC_Application')</a>
                                    <a href="crypto-ico-landing"
                                        class="dropdown-item">@lang('translation.ICO_Landing')</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-project"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Projects') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-project">
                                    <a href="projects-grid" class="dropdown-item">@lang('translation.Projects_Grid')</a>
                                    <a href="projects-list" class="dropdown-item">@lang('translation.Projects_List')</a>
                                    <a href="projects-overview"
                                        class="dropdown-item">@lang('translation.Project_Overview')</a>
                                    <a href="projects-create" class="dropdown-item">@lang('translation.Create_New')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-task"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Tasks') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-task">
                                    <a href="tasks-list" class="dropdown-item">@lang('translation.Task_List')</a>
                                    <a href="tasks-kanban" class="dropdown-item">@lang('translation.Kanban_Board')</a>
                                    <a href="tasks-create" class="dropdown-item">@lang('translation.Create_Task')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-contact"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Contacts') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-contact">
                                    <a href="contacts-grid" class="dropdown-item">@lang('translation.User_Grid')</a>
                                    <a href="contacts-list" class="dropdown-item">@lang('translation.User_List')</a>
                                    <a href="contacts-profile" class="dropdown-item">@lang('translation.Profile')</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-collection mr-2"></i>@lang('translation.Components') <div
                                class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-components">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Forms') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-form">
                                    <a href="form/form-elements" class="dropdown-item">@lang('translation.Elements')</a>
                                    <a href="form/form-layouts" class="dropdown-item">@lang('translation.Forms_Layouts')</a>
                                    <a href="form/form-validation" class="dropdown-item">@lang('translation.Validation')</a>
                                    <a href="form/form-advanced" class="dropdown-item">@lang('translation.Advanced')</a>
                                    <a href="form/form-editors" class="dropdown-item">@lang('translation.Editors')</a>
                                    <a href="form/form-uploads" class="dropdown-item">@lang('translation.File_Upload')</a>
                                    <a href="form/form-xeditable" class="dropdown-item">@lang('translation.X_editable')</a>
                                    <a href="form/form-repeater" class="dropdown-item">@lang('translation.Form_Repeater')</a>
                                    <a href="form/form-wizard" class="dropdown-item">@lang('translation.Wizard')</a>
                                    <a href="form/form-mask" class="dropdown-item">@lang('translation.Mask')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Tables') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-table">
                                    <a href="tables-basic" class="dropdown-item">@lang('translation.Basic_Tables')</a>
                                    <a href="tables-datatable"
                                        class="dropdown-item">@lang('translation.Data_Tables')</a>
                                    <a href="tables-responsive"
                                        class="dropdown-item">@lang('translation.Responsive_Table')</a>
                                    <a href="tables-editable"
                                        class="dropdown-item">@lang('translation.Editable_Table')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Charts') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                    <a href="charts/charts-apex" class="dropdown-item">@lang('translation.Apexcharts')</a>
                                    <a href="charts/charts-echart" class="dropdown-item">@lang('translation.ECharts')</a>
                                    <a href="charts/charts-chartjs" class="dropdown-item">@lang('translation.Chartjs')</a>
                                    <a href="charts/charts-flot" class="dropdown-item">@lang('translation.Flot')</a>
                                    <a href="charts/charts-tui" class="dropdown-item">@lang('translation.Toast_UI')</a>
                                    <a href="charts/charts-knob" class="dropdown-item">@lang('translation.Jquery')</a>
                                    <a href="charts/charts-sparkline" class="dropdown-item">@lang('translation.Sparkline')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Icons') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                    <a href="icons-boxicons" class="dropdown-item">@lang('translation.Boxicons')</a>
                                    <a href="icons-materialdesign"
                                        class="dropdown-item">@lang('translation.Material_Design')</a>
                                    <a href="icons-dripicons" class="dropdown-item">@lang('translation.Dripicons')</a>
                                    <a href="icons-fontawesome"
                                        class="dropdown-item">@lang('translation.Font_awesome')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Maps') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-map">
                                    <a href="maps-google" class="dropdown-item">@lang('translation.Google_Maps')</a>
                                    <a href="maps-vector" class="dropdown-item">@lang('translation.Vector_Maps')</a>
                                    <a href="maps-leaflet" class="dropdown-item">@lang('translation.Leaflet_Maps')</a>
                                </div>
                            </div>
                        </div>
                    </li>



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-file mr-2"></i>@lang('translation.Extra_Pages')<div class="arrow-down">
                            </div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-invoice"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Invoices') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-invoice">
                                    <a href="invoices-list" class="dropdown-item">@lang('translation.Invoice_List')</a>
                                    <a href="invoices-detail"
                                        class="dropdown-item">@lang('translation.Invoice_Detail')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Authentication')<div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                    <a href="auth-login" class="dropdown-item">@lang('translation.Login')</a>
                                    <a href="auth-register" class="dropdown-item">@lang('translation.Register')</a>
                                    <a href="auth-recoverpw"
                                        class="dropdown-item">@lang('translation.Recover_Password')</a>
                                    <a href="auth-lock-screen"
                                        class="dropdown-item">@lang('translation.Lock_screen')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @lang('translation.Utility') <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                    <a href="pages-starter" class="dropdown-item">@lang('translation.Starter_Page')</a>
                                    <a href="pages-maintenance"
                                        class="dropdown-item">@lang('translation.Maintenance')</a>
                                    <a href="pages-comingsoon"
                                        class="dropdown-item">@lang('translation.Coming_Soon')</a>
                                    <a href="pages-timeline" class="dropdown-item">@lang('translation.Timeline')</a>
                                    <a href="pages-faqs" class="dropdown-item">@lang('translation.FAQs')</a>
                                    <a href="pages-pricing" class="dropdown-item">@lang('translation.Pricing')</a>
                                    <a href="pages-404" class="dropdown-item">@lang('translation.Error_404')</a>
                                    <a href="pages-500" class="dropdown-item">@lang('translation.Error_500')</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-layout mr-2"></i>@lang('translation.Layouts')<div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="topnav-layout">
                            <a href="components/layouts-horizontal" class="dropdown-item">@lang('translation.Horizontal')</a>
                            <a href="index" class="dropdown-item">@lang('translation.Vertical')</a>
                            <a href="components/layouts-topbar-light" class="dropdown-item">@lang('translation.Topbar_Light')</a>
                            <a href="components/layouts-boxed-horizontal" class="dropdown-item">@lang('translation.Boxed_Width')</a>
                            <a href="components/layouts-horizontal-preloader" class="dropdown-item">@lang('translation.Preloader')</a>
                            <a href="components/layouts-colored-topbar" class="dropdown-item">@lang('translation.Colored_Topbar')</a>
                            <a href="components/layouts-scrollable-horizontal" class="dropdown-item">@lang('translation.Scrollable')</a>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
