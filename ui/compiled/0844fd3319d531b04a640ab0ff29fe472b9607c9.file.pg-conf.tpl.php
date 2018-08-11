<?php /* Smarty version Smarty-3.1.13, created on 2015-11-30 16:13:32
         compiled from "ui\theme\sispor\pg-conf.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6426565cb4f4df6f17-23131011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0844fd3319d531b04a640ab0ff29fe472b9607c9' => 
    array (
      0 => 'ui\\theme\\sispor\\pg-conf.tpl',
      1 => 1442057054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6426565cb4f4df6f17-23131011',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'd' => 0,
    '_L' => 0,
    '_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_565cb4f4e82a39_94582966',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565cb4f4e82a39_94582966')) {function content_565cb4f4e82a39_94582966($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="row">
    <div class="col-md-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['d']->value['name'];?>
</h5>

            </div>
            <div class="ibox-content" id="ibox_form">
                <div class="alert alert-danger" id="emsg">
                    <span id="emsgbody"></span>
                </div>
                <form class="form-horizontal" method="post" id="pg-conf" role="form">

                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['name'];?>
">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="settings" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Settings Name'];?>
</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="settings" name="settings" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['settings'];?>
">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="value" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Value'];?>
</label>
                        <div class="col-sm-9">
                            <textarea id="value" class="form-control" rows="3"><?php echo $_smarty_tpl->tpl_vars['d']->value['value'];?>
</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</label>
                        <div class="col-sm-9">
                            <select name="status" id="status" class="form-control">
                                <option value="Active" <?php if ($_smarty_tpl->tpl_vars['d']->value['status']=='Active'){?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Active'];?>
</option>
                                <option value="Inactive" <?php if ($_smarty_tpl->tpl_vars['d']->value['status']=='Inactive'){?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Inactive'];?>
</option>

                            </select>

                        </div>
                    </div>

                    
                        
                            
                                
                                
                                
                            
                        
                        
                            
                        
                    
                    
                        
                            
                                
                            
                                
                            
                        
                        
                            
                        
                    
                    
                        
                        
                            
                        
                    
                    
                        
                        
                            
                        
                    

                    <div class="form-group">
                        <label for="c1" class="col-sm-3 control-label"> <?php if (($_smarty_tpl->tpl_vars['d']->value['name']=='Paypal')||($_smarty_tpl->tpl_vars['d']->value['name']=='Stripe')){?>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Currency Code'];?>

                            <?php }elseif($_smarty_tpl->tpl_vars['d']->value['name']=='Braintree'){?>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Public Key'];?>

                            <?php }else{ ?>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Custom Param 1'];?>

                            <?php }?> </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="c1" name="c1" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['c1'];?>
">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="c2" class="col-sm-3 control-label"> <?php if ($_smarty_tpl->tpl_vars['d']->value['name']=='Paypal'){?>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Conversion Rate'];?>

                            <?php }elseif($_smarty_tpl->tpl_vars['d']->value['name']=='Braintree'){?>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Private Key'];?>

                            <?php }else{ ?>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Custom Param 2'];?>

                            <?php }?> </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="c2" name="c2" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['c2'];?>
">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="c3" class="col-sm-3 control-label"> <?php if ($_smarty_tpl->tpl_vars['d']->value['name']=='Braintree'){?>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Default Account'];?>

                            <?php }else{ ?>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Custom Param 3'];?>

                            <?php }?> </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="c3" name="c3" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['c3'];?>
">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="c4" class="col-sm-3 control-label"> <?php if ($_smarty_tpl->tpl_vars['d']->value['name']=='Braintree'){?>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['live or sandbox'];?>

                            <?php }else{ ?>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Custom Param 4'];?>

                            <?php }?> </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="c4" name="c4" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['c4'];?>
">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="c5" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Custom Param 5'];?>
</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="c5" name="c5" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['c5'];?>
">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <input type="hidden" name="pgid" id="pgid" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
                            <button type="submit" id="submit" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                            | <?php echo $_smarty_tpl->tpl_vars['_L']->value['Or'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/pg/"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Back To The List'];?>
</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>



</div>




<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>