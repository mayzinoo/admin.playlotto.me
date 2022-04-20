<div class="sidebar">
        <ul class="widget widget-menu unstyled">
            
            <li>
                <a class="collapsed" data-toggle="collapse" href="#deposit">
                <i class="menu-icon icon-inbox"></i>
                <i class="icon-chevron-down pull-right"></i>
                <i class="icon-chevron-up pull-right"></i>Deposit Requests</a>
                            <ul id="deposit" class="collapse unstyled">
                                <li>
                                <a href="/Admin/deposit">
                                <i class="menu-icon icon-inbox"></i>Deposit List<b class="label green pull-right">
                    <?php echo $depositdata->num_rows(); ?></b> </a></li>
                            </ul>
                </li><!-- Deposit -->



            <li>
                <a class="collapsed" data-toggle="collapse" href="#withdraw">
                <i class="menu-icon icon-tasks"></i>
                <i class="icon-chevron-down pull-right"></i>
                <i class="icon-chevron-up pull-right"></i>Withdrawal Requests</a>
                    <ul id="withdraw" class="collapse unstyled">
                        <li>
                                <a href="/Admin/withdraw">
                                <i class="menu-icon icon-inbox"></i>Withdrawal List<b class="label green pull-right">
                    <?php echo $withdrawaldata->num_rows(); ?></b> </a>
                        </li>
                    </ul>
            </li>  <!-- Withdraw -->

            <li>
                <a class="collapsed" data-toggle="collapse" href="#lottosetting">
                <i class="menu-icon icon-paste"></i>
                <i class="icon-chevron-down pull-right"></i>
                <i class="icon-chevron-up pull-right"></i>Lotto </a>
                    <ul id="lottosetting" class="collapse unstyled">
                        <li>
                                <a href="/Admin/lotto_setting">
                                <i class="menu-icon icon-inbox"></i>Lotto Setting</a>
                        </li>
                    </ul>
            </li>  <!-- Withdraw -->

            <li><a class="collapsed" data-toggle="collapse" href="#setting"><i class="menu-icon icon-cog">
                    </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                    </i>Setting </a>
                        <ul id="setting" class="collapse unstyled">
                            
                            <li><a href="/Admin/security"><i class="icon-inbox"></i>Security </a></li>                                        
                            <li><a href="/Admin/logout"><i class="icon-inbox"></i>Logout </a></li>
                        </ul>
            </li><!-- Setting -->
            
        </ul>
</div>
