<div class="sidebar capsule--rounded bg_img overlay--dark"
     data-background="<?php echo e(asset('assets/admin/images/sidebar/2.jpg')); ?>">
    <button class="res-sidebar-close-btn"><i class="las la-times"></i></button>
    <div class="sidebar__inner">
        <div class="sidebar__logo">
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="sidebar__main-logo"><img
                    src="<?php echo e(getImage(imagePath()['logoIcon']['path'] .'/logo.png')); ?>" alt="image"></a>
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="sidebar__logo-shape"><img
                    src="<?php echo e(getImage(imagePath()['logoIcon']['path'] .'/favicon.png')); ?>" alt="image"></a>
            <button type="button" class="navbar__expand"></button>
        </div>

        <div class="sidebar__menu-wrapper" id="sidebar__menuWrapper">
            <ul class="sidebar__menu">
                <li class="sidebar-menu-item <?php echo e(menuActive('admin.dashboard')); ?>">
                    <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link ">
                        <i class="menu-icon las la-home"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Dashboard'); ?></span>
                    </a>
                </li>


                <li class="sidebar-menu-item <?php echo e(menuActive('admin.referral.index')); ?>">
                    <a href="<?php echo e(route('admin.referral.index')); ?>" class="nav-link ">
                        <i class="menu-icon las la-tree"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Manage Referral'); ?></span>
                    </a>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive(['admin.time-setting*', 'admin.plan-setting*'],3)); ?>">
                        <i class="menu-icon las la-clipboard-check"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Plan Manage'); ?></span>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive(['admin.time-setting*','admin.plan-setting*'],2)); ?> ">
                        <ul>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.time-setting')); ?> ">
                                <a href="<?php echo e(route('admin.time-setting')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Time Manage'); ?></span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.plan-setting')); ?>">
                                <a href="<?php echo e(route('admin.plan-setting')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Plan Manage'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>



                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.users*',3)); ?>">
                        <i class="menu-icon las la-users"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Manage Users'); ?></span>

                        <?php if($banned_users_count > 0 || $email_unverified_users_count > 0 || $sms_unverified_users_count > 0): ?>
                            <span class="menu-badge pill bg--primary ml-auto">
                                <i class="fa fa-exclamation"></i>
                            </span>
                        <?php endif; ?>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('admin.users*',2)); ?> ">
                        <ul>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.users.all')); ?> ">
                                <a href="<?php echo e(route('admin.users.all')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('All Users'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.users.active')); ?> ">
                                <a href="<?php echo e(route('admin.users.active')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Active Users'); ?></span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.users.banned')); ?> ">
                                <a href="<?php echo e(route('admin.users.banned')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Banned Users'); ?></span>
                                    <?php if($banned_users_count): ?>
                                        <span class="menu-badge pill bg--primary ml-auto"><?php echo e($banned_users_count); ?></span>
                                    <?php endif; ?>
                                </a>
                            </li>

                            <li class="sidebar-menu-item  <?php echo e(menuActive('admin.users.emailUnverified')); ?>">
                                <a href="<?php echo e(route('admin.users.emailUnverified')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Email Unverified'); ?></span>

                                    <?php if($email_unverified_users_count): ?>
                                        <span
                                            class="menu-badge pill bg--primary ml-auto"><?php echo e($email_unverified_users_count); ?></span>
                                    <?php endif; ?>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.users.smsUnverified')); ?>">
                                <a href="<?php echo e(route('admin.users.smsUnverified')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('SMS Unverified'); ?></span>
                                    <?php if($sms_unverified_users_count): ?>
                                        <span
                                            class="menu-badge pill bg--primary ml-auto"><?php echo e($sms_unverified_users_count); ?></span>
                                    <?php endif; ?>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.users.login.history')); ?>">
                                <a href="<?php echo e(route('admin.users.login.history')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Login History'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.users.email.all')); ?>">
                                <a href="<?php echo e(route('admin.users.email.all')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Send Email'); ?></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.deposit*',3)); ?>">
                        <i class="menu-icon las la-credit-card"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Deposit System'); ?></span>
                        <?php if(0 < $pending_deposits_count): ?>
                            <span class="menu-badge pill bg--primary ml-auto">
                                <i class="fa fa-exclamation"></i>
                            </span>
                        <?php endif; ?>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('admin.deposit*',2)); ?> ">
                        <ul>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.deposit.gateway.index')); ?> ">
                                <a href="<?php echo e(route('admin.deposit.gateway.index')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Automatic Gateways'); ?></span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.deposit.manual.index')); ?> ">
                                <a href="<?php echo e(route('admin.deposit.manual.index')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Manual Gateways'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.deposit.pending')); ?> ">
                                <a href="<?php echo e(route('admin.deposit.pending')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Pending Deposits'); ?></span>
                                    <?php if($pending_deposits_count): ?>
                                        <span class="menu-badge pill bg--primary ml-auto"><?php echo e($pending_deposits_count); ?></span>
                                    <?php endif; ?>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.deposit.approved')); ?> ">
                                <a href="<?php echo e(route('admin.deposit.approved')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Approved Deposits'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.deposit.successful')); ?> ">
                                <a href="<?php echo e(route('admin.deposit.successful')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Successful Deposits'); ?></span>
                                </a>
                            </li>


                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.deposit.rejected')); ?> ">
                                <a href="<?php echo e(route('admin.deposit.rejected')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Rejected Deposits'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.deposit.list')); ?> ">
                                <a href="<?php echo e(route('admin.deposit.list')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('All Deposits'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.withdraw*',3)); ?>">
                        <i class="menu-icon la la-bank"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Withdrawals'); ?> </span>
                        <?php if(0 < $pending_withdraw_count): ?>
                            <span class="menu-badge pill bg--primary ml-auto">
                                <i class="fa fa-exclamation"></i>
                            </span>
                        <?php endif; ?>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('admin.withdraw*',2)); ?> ">
                        <ul>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.withdraw.method.index')); ?>">
                                <a href="<?php echo e(route('admin.withdraw.method.index')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Withdraw Methods'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.withdraw.pending')); ?> ">
                                <a href="<?php echo e(route('admin.withdraw.pending')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Pending Log'); ?></span>

                                    <?php if($pending_withdraw_count): ?>
                                        <span class="menu-badge pill bg--primary ml-auto"><?php echo e($pending_withdraw_count); ?></span>
                                    <?php endif; ?>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.withdraw.approved')); ?> ">
                                <a href="<?php echo e(route('admin.withdraw.approved')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Approved Log'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.withdraw.rejected')); ?> ">
                                <a href="<?php echo e(route('admin.withdraw.rejected')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Rejected Log'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.withdraw.log')); ?> ">
                                <a href="<?php echo e(route('admin.withdraw.log')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Withdrawals Log'); ?></span>
                                </a>
                            </li>


                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.ticket*',3)); ?>">
                        <i class="menu-icon la la-ticket"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Support Ticket'); ?> </span>
                        <?php if(0 < $pending_ticket_count): ?>
                            <span class="menu-badge pill bg--primary ml-auto">
                                <i class="fa fa-exclamation"></i>
                            </span>
                        <?php endif; ?>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('admin.ticket*',2)); ?> ">
                        <ul>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.ticket')); ?> ">
                                <a href="<?php echo e(route('admin.ticket')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('All Ticket'); ?></span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.ticket.pending')); ?> ">
                                <a href="<?php echo e(route('admin.ticket.pending')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Pending Ticket'); ?></span>
                                    <?php if($pending_ticket_count): ?>
                                        <span
                                            class="menu-badge pill bg--primary ml-auto"><?php echo e($pending_ticket_count); ?></span>
                                    <?php endif; ?>
                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.ticket.closed')); ?> ">
                                <a href="<?php echo e(route('admin.ticket.closed')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Closed Ticket'); ?></span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.ticket.answered')); ?> ">
                                <a href="<?php echo e(route('admin.ticket.answered')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Answered Ticket'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.report*',3)); ?>">
                        <i class="menu-icon la la-list"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Report'); ?> </span>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('admin.report*',2)); ?> ">
                        <ul>

                            <li class="sidebar-menu-item <?php echo e(menuActive(['admin.report.transaction.deposit','admin.report.transaction.search'])); ?>">
                                <a href="<?php echo e(route('admin.report.transaction.deposit')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Transaction Log'); ?></span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(menuActive(['admin.report.plan','admin.report.plan.search'])); ?>">
                                <a href="<?php echo e(route('admin.report.plan')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Invest Plan Log'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive(['admin.report.commissions.deposit','admin.report.commissions.search'])); ?>">
                                <a href="<?php echo e(route('admin.report.commissions.deposit')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Commission Log'); ?></span>
                                </a>
                            </li>


                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.promotional.tool.index')); ?>">
                    <a href="<?php echo e(route('admin.promotional.tool.index')); ?>" class="nav-link ">
                        <i class="menu-icon las la-ad"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Promotional Tool'); ?></span>
                    </a>
                </li>


                <li class="sidebar-menu-item  <?php echo e(menuActive('admin.subscriber.index')); ?>">
                    <a href="<?php echo e(route('admin.subscriber.index')); ?>" class="nav-link"
                       data-default-url="<?php echo e(route('admin.subscriber.index')); ?>">
                        <i class="menu-icon las la-thumbs-up"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Subscribers'); ?> </span>
                    </a>
                </li>


                <li class="sidebar-menu-item  <?php echo e(menuActive(['admin.language-manage','admin.language-key'])); ?>">
                    <a href="<?php echo e(route('admin.language-manage')); ?>" class="nav-link"
                       data-default-url="<?php echo e(route('admin.language-manage')); ?>">
                        <i class="menu-icon las la-language"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Language'); ?> </span>
                    </a>
                </li>

                <li class="sidebar__menu-header"><?php echo app('translator')->get('Pages'); ?></li>

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.setting.index')); ?>">
                    <a href="<?php echo e(route('admin.setting.index')); ?>" class="nav-link">
                        <i class="menu-icon las la-life-ring"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Settings'); ?></span>
                    </a>
                </li>

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.setting.logo-icon')); ?>">
                    <a href="<?php echo e(route('admin.setting.logo-icon')); ?>" class="nav-link">
                        <i class="menu-icon las la-images"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Logo Icon Setting'); ?></span>
                    </a>
                </li>

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.plugin.index')); ?>">
                    <a href="<?php echo e(route('admin.plugin.index')); ?>" class="nav-link">
                        <i class="menu-icon las la-cogs"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Plugins'); ?></span>
                    </a>
                </li>

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.seo')); ?>">
                    <a href="<?php echo e(route('admin.seo')); ?>" class="nav-link">
                        <i class="menu-icon las la-globe"></i>
                        <span class="menu-title"><?php echo app('translator')->get('SEO'); ?></span>
                    </a>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.email-template*',3)); ?>">
                        <i class="menu-icon la la-envelope-o"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Email Manager'); ?></span>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('admin.email-template*',2)); ?> ">
                        <ul>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.email-template.global')); ?> ">
                                <a href="<?php echo e(route('admin.email-template.global')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Global Template'); ?></span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(menuActive(['admin.email-template.index','admin.email-template.edit'])); ?> ">
                                <a href="<?php echo e(route('admin.email-template.index')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Email Templates'); ?></span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.email-template.setting')); ?> ">
                                <a href="<?php echo e(route('admin.email-template.setting')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Email Configure'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.sms.template*',3)); ?>">
                        <i class="menu-icon la la-mobile"></i>
                        <span class="menu-title"><?php echo app('translator')->get('SMS Manager'); ?></span>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('admin.sms.template*',2)); ?> ">
                        <ul>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.sms.template.global')); ?> ">
                                <a href="<?php echo e(route('admin.sms.template.global')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('Global Setting'); ?></span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(menuActive('admin.sms.templates.setting')); ?> ">
                                <a href="<?php echo e(route('admin.sms.templates.setting')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('SMS Gateways'); ?></span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item <?php echo e(menuActive(['admin.sms.template.index','admin.sms.template.edit'])); ?> ">
                                <a href="<?php echo e(route('admin.sms.template.index')); ?>" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title"><?php echo app('translator')->get('SMS Templates'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.setting.holiday')); ?>">
                    <a href="<?php echo e(route('admin.setting.holiday')); ?>" class="nav-link">
                        <i class="menu-icon la la-toggle-off"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Holiday Setting'); ?></span>
                    </a>
                </li>

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.setting.cookie')); ?>">
                    <a href="<?php echo e(route('admin.setting.cookie')); ?>" class="nav-link">
                        <i class="menu-icon las la-cookie-bite"></i>
                        <span class="menu-title"><?php echo app('translator')->get('GDPR Cookie'); ?></span>
                    </a>
                </li>

                <li class="sidebar__menu-header"><?php echo app('translator')->get('TEMPLATES'); ?></li>

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.frontend.templates')); ?>">
                    <a href="<?php echo e(route('admin.frontend.templates')); ?>" class="nav-link ">
                        <i class="menu-icon la la-html5"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Active Template'); ?></span>
                    </a>
                </li>


                <li class="sidebar__menu-header"><?php echo app('translator')->get('PAGE BUILDER'); ?></li>

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.frontend.manage.pages')); ?>">
                    <a href="<?php echo e(route('admin.frontend.manage.pages')); ?>" class="nav-link ">
                        <i class="menu-icon la la-list"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Manage Pages'); ?></span>
                    </a>
                </li>

                <li class="sidebar__menu-header"><?php echo app('translator')->get('CONTENT MANAGER'); ?></li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="<?php echo e(menuActive('admin.frontend.sections*',3)); ?>">
                        <i class="menu-icon la la-html5"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Section Manage'); ?></span>
                    </a>
                    <div class="sidebar-submenu <?php echo e(menuActive('admin.frontend.sections*',2)); ?> ">
                        <ul>
                            <?php
                                $lastSegment =  collect(request()->segments())->last();
                            ?>
                            <?php $__currentLoopData = getPageSections(true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $secs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($secs['builder']): ?>
                                    <li class="sidebar-menu-item  <?php if($lastSegment == $k): ?> active <?php endif; ?> ">
                                        <a href="<?php echo e(route('admin.frontend.sections',$k)); ?>" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title"><?php echo e($secs['name']); ?></span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                        </ul>
                    </div>
                </li>


                <li class="sidebar__menu-header"><?php echo app('translator')->get('Extra'); ?></li>
                
                <li class="sidebar-menu-item  <?php echo e(menuActive('admin.system.info')); ?>">
                    <a href="<?php echo e(route('admin.system.info')); ?>" class="nav-link"
                       data-default-url="<?php echo e(route('admin.system.info')); ?>">
                        <i class="menu-icon las la-server"></i>
                        <span class="menu-title"><?php echo app('translator')->get('System Information'); ?> </span>
                    </a>
                </li>

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.setting.custom.css')); ?>">
                    <a href="<?php echo e(route('admin.setting.custom.css')); ?>" class="nav-link">
                        <i class="menu-icon lab la-css3-alt"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Custom CSS'); ?></span>
                    </a>
                </li>

                <li class="sidebar-menu-item <?php echo e(menuActive('admin.setting.optimize')); ?>">
                    <a href="<?php echo e(route('admin.setting.optimize')); ?>" class="nav-link">
                        <i class="menu-icon las la-broom"></i>
                        <span class="menu-title"><?php echo app('translator')->get('Clear Cache'); ?></span>
                    </a>
                </li>

                
            </ul>


        <div class="text-center mb-3 text-uppercase">
            <span class="text--primary"><?php echo e(systemDetails()['name']); ?></span>
            <span class="text--success">V<?php echo e(systemDetails()['version']); ?> </span>
        </div>
        
        </div>
    </div>
</div>
<!-- sidebar end -->
<?php /**PATH C:\xampp\htdocs\towork\core\resources\views/admin/partials/sidenav.blade.php ENDPATH**/ ?>