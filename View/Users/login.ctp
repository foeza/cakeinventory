<div class="row" >
    <div class="col-lg-12" style="margin-top:5%">
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <?php
                                echo $this->Html->tag('h1', __('IMS - Bagusstamp'));
                                echo $this->Html->tag('p', __('<b><i>IMS (Inventory Management System)</i></b> Distributor / jasa pembuatan berbgai stempel/ukuran & perlengkapan lainnya.'));
                        ?>

                    </div>
                    <div class="col-lg-4 pull-right">
                        <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title"> Login</h3></div>
                        <div class="panel-body">
                            <?php
                                    echo $this->Form->create('User', array(
                                        'role'=>'form',
                                        'url' => 'login',
                                        'class'=>'form-horizontal',
                                    ));
                            ?>
                            <fieldset>
                                <div class="input-group" style="margin-bottom: 25px">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <?php
                                            echo $this->Form->input('email', array(
                                                'div'   =>false,
                                                'label' =>false,
                                                'class' =>'form-control',
                                                'placeholder'=>'email',
                                                'error' => array(
                                                    'attributes' => array(
                                                        'style' => 'display:none'
                                                )),
                                            ));
                                    ?>

                                </div>
                                <div class="input-group" style="margin-bottom: 25px">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <?php
                                            echo $this->Form->input('password', array(
                                                'div'   =>false,
                                                'label' =>false,
                                                'class' =>'form-control',
                                                'placeholder'=>'password',
                                                'error' => array(
                                                    'attributes' => array(
                                                        'style' => 'display:none'
                                                )),
                                            ));
                                    ?>

                                </div>

                                <div class="form-actions">
                                <?php echo $this->Form->submit(__('Submit'), array('class'=>'btn btn-primary', 'div'=>false));?>
                                <?php echo $this->Form->reset(__('Cancel'), array('class'=>'btn', 'div'=>false));?>
                                </div>

                            </fieldset>
                            <?php
                                    echo $this->Form->end();
                            ?>
                            <!-- <div class="text-right">
                            <a href="<?php echo $this->Html->url('/users/forgot_password');?>">Forgot Password?<i class="fa fa-arrow-circle-right"></i></a>
                            </div> -->
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p>Develop @zaa</p>
    </div>
</div>

