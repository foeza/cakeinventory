  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php
                        if (!empty($sysetting)) {
                            $nav_brand = $this->Html->link($sysetting['SystemSetting']['name'], '/', array(
                                'class'     => 'navbar-brand',
                                'escape'    => false,
                            ));
                        } else {
                            $nav_brand = $this->Html->link(__('Simple Inventory Management System'), '/', array(
                                'class'     => 'navbar-brand',
                                'escape'    => false,
                            ));
                        }
                        echo $nav_brand;
                ?>
            </div>
            <ul class="nav navbar-right top-nav">
            <li><a>  
                <?php echo $this->Form->create('Stock',array('url'=>array('plugin'=>false,'controller'=>'stocks','action'=>'search'),'type'=>'get'));?>
                        <?php echo $this->Form->input('transID',array('label'=>false,'placeholder'=>'Transaction id','class'=>'form-control input-sm'));?>
                       
                        <?php echo $this->Form->end();?>
                        </a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $userDetails['name'];?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                        <?php echo $this->Html->link('<i class="fa fa-fw fa-user"></i> Profile',array('controller'=>'users','action'=>'view',$userDetails['id']),array('escape'=>false));?>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <?php echo $this->Html->link('<i class="fa fa-fw fa-power-off"></i> Log Out',array('controller'=>'users','action'=>'logout'),array('escape'=>false));?>
                        </li>
                    </ul>
                </li>
            </ul>
            
        </nav>