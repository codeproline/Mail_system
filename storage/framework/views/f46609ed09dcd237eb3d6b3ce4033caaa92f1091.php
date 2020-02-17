<?php if(Auth::check()): ?> <div class="sidebar sidebar-main "> <div class="sidebar-content"> <div class="sidebar-user"> <div class="category-content"> <div class="media"> <a href="#" class="media-left"> <?php echo e(Html::image(route('imagecache', ['template' => 'profile', 'filename' => $image]), 'Admin', array('class' => 'img-circle img-sm'))); ?> </a> <div class="media-body"> <span class="media-heading text-semibold"> <?php echo e(Auth::user()->name); ?></span> <div class="text-size-mini text-muted"> <i class="icon-pin text-size-small"></i> Admin </div> </div> <div class="media-right media-middle"> <ul class="icons-list"> <li> <a href="#"><i class="icon-cog3"></i></a> </li> </ul> </div> </div> </div> </div> <?php if(Auth::user()->id >1): ?> <div class="sidebar-category sidebar-category-visible"> <div class="category-content no-padding"> <ul class="navigation navigation-main navigation-accordion"> <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li> <?php $__currentLoopData = $role_names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if($item->is_root == 'yes'): ?> <?php if($item->main_role == 1): ?> <li class="has-sub <?php $__currentLoopData = $role_names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_key=>$item_sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if(isset($item_sub->link)): ?> <?php if( $item_sub->parent_id == $item->id): ?> <?php echo e(set_active($item_sub->link)); ?> <?php endif; ?> <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>" > <?php else: ?> <li class="<?php echo e(set_active($item->link)); ?>" > <?php endif; ?> <a href="<?php echo e(url($item->link)); ?>" > <i class="<?php echo e($item->icon); ?>"></i> <span class="text"><?php echo e(trans($item->role_name)); ?></span> <?php endif; ?> </a> <?php if($item->is_root == 'yes'): ?> <ul class="sub-menu " > <?php $__currentLoopData = $role_names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_key=>$item_sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if($item_sub->parent_id == $item->id): ?> <li class="<?php echo e(set_active($item_sub->link)); ?>"><a href="<?php echo e(url($item_sub->link)); ?>"> <?php echo e(trans($item_sub->role_name)); ?> </a></li> <?php  unset($role_names[$sub_key]) ; ?>
 <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </ul> <?php endif; ?> </li> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <li class="<?php echo e(set_active('auth/logout')); ?>"> <a href="<?php echo e(url('auth/logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="icon-switch2"></i> <span class="text"> <?php echo e(trans('menu.logout')); ?></span> </a> </li> </ul> </li> </ul> </div> </div> <?php else: ?> <div class="sidebar-category sidebar-category-visible"> <div class="category-content no-padding"> <ul class="navigation navigation-main navigation-accordion"> <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li> <li class="<?php echo e(set_active('admin/dashboard')); ?>"> <a href="<?php echo e(url('admin/dashboard')); ?>"> <i class="icon-home4"></i> <span class="text" ><?php echo e(trans('menu.dashboard')); ?></span> </a> </li> <li class="navigation-header"><span>Users</span> <i class="icon-menu" title="Users"></i></li> <li class="has-sub <?php echo e(set_active('admin/genealogy')); ?><?php echo e(set_active('admin/sponsortree')); ?><?php echo e(set_active('admin/tree')); ?>"> <a href="javascript:;"> <span class="badge pull-right"></span> <i class="icon-tree7"></i> <span><?php echo e(trans('menu.genealogy')); ?></span> </a> <ul class="sub-menu"> <li class="<?php echo e(set_active('admin/genealogy')); ?>"><a href="<?php echo e(url('admin/genealogy')); ?>"><?php echo e(trans('menu.binary-genealogy')); ?></a></li> <li class="<?php echo e(set_active('admin/sponsortree')); ?>"><a href="<?php echo e(url('admin/sponsortree')); ?>"><?php echo e(trans('menu.sponsor-genealogy')); ?></a></li> <li class="<?php echo e(set_active('admin/tree')); ?>"><a href="<?php echo e(url('admin/tree')); ?>"><?php echo e(trans('menu.tree-genealogy')); ?></a></li> </ul> </li> <li class="<?php echo e(set_active('admin/register')); ?>"> <a href="<?php echo e(url('admin/register')); ?>"> <i class="icon-add"></i> <span class="text"><?php echo e(trans('menu.register')); ?> </span> </a> </li> <li class="has-sub <?php echo e(set_active('admin/createbrokers')); ?><?php echo e(set_active('admin/brokerrequest')); ?>"> <a href="javascript:;" > <i class="icon-pushpin"></i> <span class="text">Broker Details</span> </a> <ul class="sub-menu"> <li class="<?php echo e(set_active('admin/createbrokers')); ?>"><a href="<?php echo e(url('admin/createbrokers')); ?>">Create Brokers</a></li> <li class="<?php echo e(set_active('admin/brokerrequest')); ?>"><a href="<?php echo e(url('admin/brokerrequest')); ?>">User Request</a></li> </ul> </li> <li class="navigation-header"><span>Funds Management</span> <i class="icon-menu" title="Funds Management"></i></li> <li class="<?php echo e(set_active('admin/wallet*')); ?>"> <a href="<?php echo e(url('admin/wallet')); ?>"> <i class="icon-wallet"></i> <span class="text"><?php echo e(trans('menu.ewallet')); ?> </span> </a> </li> <li class="<?php echo e(set_active('admin/rs-wallet')); ?>"> </li> <li class="<?php echo e(set_active('admin/fund-credits')); ?>"> <a href="<?php echo e(url('admin/fund-credits')); ?>"> <i class="icon-credit-card"></i> <span class="text"><?php echo e(trans('menu.fund-credits')); ?> </span> </a> </li> <li class="<?php echo e(set_active('admin/trackpayment')); ?>"> <a href="<?php echo e(url('admin/trackpayment')); ?>"> <i class="icon-cart-add"></i> <span class="text">Forced Track Payment</span> </a> </li> <li class="<?php echo e(set_active('admin/purchase-details')); ?>"> <a href="<?php echo e(url('admin/purchase-details')); ?>"> <i class="fa fa-shopping-cart"></i> <span class="text">Purchase History</span> </a> </li> <li class="navigation-header"><span>Communication</span> <i class="icon-menu" title="Forms"></i></li> <li class="has-sub <?php echo e(set_active('admin/inbox')); ?>"> <a href="<?php echo e(url('admin/inbox')); ?>"> <span class="badge pull-right"></span> <i class="icon-envelop5"></i> <span>Support</span> </a> </li> <li class="has-sub <?php echo e(set_active('admin/ticketdashboard')); ?> <?php echo e(set_active('admin/view_ticket')); ?> <?php echo e(set_active('admin/ticket_configuration')); ?> <?php echo e(set_active('admin/get-faq')); ?><?php echo e(set_active('admin/helpdesk/tickets-dashboard')); ?>"> <a href="<?php echo e(url('admin/helpdesk/tickets-dashboard')); ?>"> <span class="badge pull-right"></span> <i class="icon-ticket"></i> <span><?php echo e(trans('menu.ticket_center')); ?></span> </a> </li> <li class="has-sub <?php echo e(set_active('admin/createnews')); ?><?php echo e(set_active('admin/read_news')); ?>"> <a href="javascript:;" > <i class="icon-newspaper"></i> <span class="text">News</span> </a> <ul class="sub-menu"> <li class="<?php echo e(set_active('admin/createnews')); ?>"><a href="<?php echo e(url('admin/createnews')); ?>">Create news</a></li> <li class="<?php echo e(set_active('admin/read_news')); ?>"><a href="<?php echo e(url('admin/read_news')); ?>">Read News</a></li> </ul> </li> <li class="navigation-header"><span>Email Marketing </span> <i class="icon-menu" title="Settings"></i> </li> <?php if(false): ?> <li class="has-sub <?php echo e(set_active('admin/campaign')); ?>"> <a href="javascript:;" > <i class="icon-cogs"></i> <span class="text"><?php echo e(trans('menu.campaigns')); ?></span> </a> <ul class="sub-menu"> <li class="<?php echo e(set_active('admin/campaign/create')); ?>"> <a href="<?php echo e(url('admin/campaign/create')); ?>"> <?php echo e(trans('menu.create_new_campaign')); ?> </a> </li> <li class="<?php echo e(set_active('admin/campaign/lists')); ?>"> <a href="<?php echo e(url('admin/campaign/lists')); ?>"> <?php echo e(trans('menu.manage_campaigns')); ?> </a> </li> </ul> </li> <li class="has-sub <?php echo e(set_active('admin/campaign/contacts')); ?>"> <a href="javascript:;" > <i class="icon-cogs"></i> <span class="text"><?php echo e(trans('menu.contacts')); ?></span> </a> <ul class="sub-menu"> <li class="<?php echo e(set_active('admin/campaign/contacts')); ?>"> <a href="<?php echo e(url('admin/campaign/contacts')); ?>"> <?php echo e(trans('menu.contacts_lists')); ?> </a> </li> </ul> </li> <li class="has-sub <?php echo e(set_active('admin/campaign/autoresponder')); ?>"> <a href="javascript:;" > <i class="icon-cogs"></i> <span class="text"><?php echo e(trans('menu.autoresponders')); ?></span> </a> <ul class="sub-menu"> <li class="<?php echo e(set_active('admin/campaign/autoresponders')); ?>"> <a href="<?php echo e(url('admin/campaign/autoresponders')); ?>"> <?php echo e(trans('menu.autoresponders_list')); ?> </a> </li> <li class="<?php echo e(set_active('admin/campaign/autoresponders/create')); ?>"> <a href="<?php echo e(url('admin/campaign/autoresponders/create')); ?>"> <?php echo e(trans('menu.create_autoresponder')); ?> </a> </li> </ul> </li> <?php endif; ?> <li class="navigation-header"><span><?php echo e(trans('menu.Tools')); ?></span> <i class="icon-menu" title="Settings"></i></li> <li class="has-sub <?php echo e(set_active('admin/autoresponse')); ?> <?php echo e(set_active('admin/documentupload')); ?> <?php echo e(set_active('admin/optionsettings')); ?><?php echo e(set_active('admin/sitedown_management')); ?>"> <a href="javascript:;" > <i class="icon-cogs"></i> <span class="text">Guides</span> </a> <ul class="sub-menu"> <li class="<?php echo e(set_active('admin/documentupload')); ?>"><a href="<?php echo e(url('admin/documentupload')); ?>"><?php echo e(trans('menu.Documents')); ?></a></li> <li class="<?php echo e(set_active('admin/addvideos')); ?>"><a href="<?php echo e(url('admin/addvideos')); ?>">Videos</a></li> </ul> </li> <li class="has-sub <?php echo e(set_active('admin/voucherlist')); ?> <?php echo e(set_active('admin/voucherrequest')); ?>"> <a href="javascript:;" > <i class="icon-file-text"></i> <span class="text"><?php echo e(trans('menu.Voucher')); ?></span> </a> <ul class="sub-menu"> <li class="<?php echo e(set_active('admin/voucherlist')); ?>"><a href="<?php echo e(url('admin/voucherlist')); ?>"><?php echo e(trans('menu.Voucher_List')); ?></a></li> <li class="<?php echo e(set_active('admin/voucherrequest')); ?>"><a href="<?php echo e(url('admin/voucherrequest')); ?>"><?php echo e(trans('menu.Voucher_Request')); ?></a></li> </ul> </li> <li class="navigation-header"><span>Profile Management</span> <i class="icon-menu" title="Profile Management"></i></li> <li class="<?php echo e(set_active('admin/userprofiles/*')); ?>"> <a href="<?php echo e(url('admin/userprofiles/'.Auth::user()->username)); ?>"> <i class="icon-profile"></i> <span class="text"><?php echo e(trans('menu.profile')); ?> </span> </a> </li> <li class="navigation-header"><span>Members Management</span> <i class="icon-menu" title="Forms"></i></li> <li class="has-sub <?php echo e(set_active('admin/users')); ?><?php echo e(set_active('admin/users/*')); ?><?php echo e(set_active('admin/pendingtransactions')); ?>"> <a href="javascript:;"> <i class="icon-users2"></i> <span class="text"> <?php echo e(trans('menu.members')); ?></span> </a> <ul class="sub-menu"> <li class="<?php echo e(set_active('admin/users')); ?>"><a href="<?php echo e(url('admin/users')); ?>"><?php echo e(trans('menu.view-all')); ?></a></li> <li class="<?php echo e(set_active('admin/pendingtransactions')); ?>"><a href="<?php echo e(url('admin/pendingtransactions')); ?>">Pending transactions</a></li> <li class="<?php echo e(set_active('admin/users/password')); ?>"><a href="<?php echo e(url('admin/users/password')); ?>">Edit Info</a></li> <li class="<?php echo e(set_active('admin/users/verifyusers')); ?>"><a href="<?php echo e(url('admin/users/verifyusers')); ?>">Verify Users</a></li> </ul> </li> <li class="navigation-header"><span>Settings</span> <i class="icon-menu" title="Settings"></i></li> <li class="has-sub <?php echo e(set_active('admin/appsettings')); ?><?php echo e(set_active('admin/themesettings')); ?> <?php echo e(set_active('admin/emailsettings')); ?><?php echo e(set_active('admin/uploads')); ?>"> <a href="javascript:;" > <i class="icon-cog4"></i> <span class="text"> <?php echo e(trans('menu.system_settings')); ?></span> </a> <ul class="sub-menu"> <li class="<?php echo e(set_active('admin/appsettings')); ?>"><a href="<?php echo e(url('admin/appsettings')); ?>">App settings</a></li> <li class="<?php echo e(set_active('admin/welcomeemail')); ?>"><a href="<?php echo e(url('admin/welcomeemail')); ?>"><?php echo e(trans('menu.system_templates')); ?></a></li> </ul> </li> <li class="has-sub <?php echo e(set_active('admin/plansettings')); ?> <?php echo e(set_active('admin/bonus')); ?> <?php echo e(set_active('admin/ranksetting')); ?><?php echo e(set_active('admin/settings')); ?>"> <a href="javascript:;" > <i class="icon-cog4"></i> <span class="text"> <?php echo e(trans('menu.network_settings')); ?></span> </a> <ul class="sub-menu"> <li class="<?php echo e(set_active('admin/settings')); ?>"><a href="<?php echo e(url('admin/settings')); ?>"> <?php echo e(trans('menu.Commission_Settings')); ?> </a></li> <li class="<?php echo e(set_active('admin/plansettings')); ?>"><a href="<?php echo e(url('admin/plansettings')); ?>"> <?php echo e(trans('menu.plan-settings')); ?> </a></li> <li class="<?php echo e(set_active('admin/ranksetting')); ?>"><a href="<?php echo e(url('admin/ranksetting')); ?>"><?php echo e(trans('menu.rank-settings')); ?></a></li> </ul> </li> <li class="navigation-header"><span>Payout Management</span> <i class="icon-menu" title="Payout Management"></i></li> <li class="<?php echo e(set_active('admin/payoutrequest')); ?>"> <a href="<?php echo e(url('admin/payoutrequest')); ?>"> <i class="icon-paypal2"></i> <span class="text">Epayment</span> </a> </li> <li class="navigation-header"><span>Reports</span> <i class="icon-menu" title="Reports"></i></li> <li class="has-sub <?php echo e(set_active('admin/salesreport')); ?><?php echo e(set_active('admin/topearners')); ?><?php echo e(set_active('admin/joiningreport')); ?><?php echo e(set_active('admin/incomereport')); ?> <?php echo e(set_active('admin/payoutreport')); ?><?php echo e(set_active('admin/joiningreportbysponsor')); ?><?php echo e(set_active('admin/joiningreportbycountry')); ?><?php echo e(set_active('admin/fundcredit')); ?><?php echo e(set_active('admin/topenrollerreport')); ?><?php echo e(set_active('admin/pairingreport')); ?>"> <a href="javascript:;" > <i class="fa fa-sticky-note"></i> <span class="text"> <?php echo e(trans('menu.reports')); ?></span> </a> <ul class="sub-menu"> <li class="<?php echo e(set_active('admin/joiningreport')); ?>"><a href="<?php echo e(url('admin/joiningreport')); ?>"><?php echo e(trans('menu.joining-report')); ?></a></li> <li class="<?php echo e(set_active('admin/fundcredit')); ?>"><a href="<?php echo e(url('admin/fundcredit')); ?>"> <?php echo e(trans('menu.fund-credit-report')); ?></a></li> <li class="<?php echo e(set_active('admin/incomereport')); ?>"><a href="<?php echo e(url('admin/incomereport')); ?>"><?php echo e(trans('menu.member-income-report')); ?></a></li> <li class="<?php echo e(set_active('admin/topearners')); ?>"><a href="<?php echo e(url('admin/topearners')); ?>"> <?php echo e(trans('menu.top-earners-report')); ?> </a></li> <li class="<?php echo e(set_active('admin/payoutreport')); ?>"><a href="<?php echo e(url('admin/payoutreport')); ?>"><?php echo e(trans('menu.payout-report')); ?></a></li> <li class="<?php echo e(set_active('admin/salesreport')); ?>"><a href="<?php echo e(url('admin/salesreport')); ?>"><?php echo e(trans('menu.sales_report')); ?></a></li> <li class="<?php echo e(set_active('admin/topenrollerreport')); ?>"><a href="<?php echo e(url('admin/topenrollerreport')); ?>"><?php echo e(trans('menu.top_enroller_report')); ?></a></li> </ul> </li> <li><a href="<?php echo e(url('/logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-switch2"></i> Logout</a></li> </ul> </div> </div> <?php endif; ?> </div> </div> <?php endif; ?>