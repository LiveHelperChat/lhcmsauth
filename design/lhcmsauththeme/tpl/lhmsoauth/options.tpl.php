<h1 class="attr-header"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('module/msauth','MS Auth Options')?></h1>

<form action="" method="post" ng-non-bindable>

    <?php include(erLhcoreClassDesign::designtpl('lhkernel/csfr_token.tpl.php'));?>

    <?php if (isset($updated) && $updated == 'done') : $msg = erTranslationClassLhTranslation::getInstance()->getTranslation('module/msauth','Settings updated'); ?>
        <?php include(erLhcoreClassDesign::designtpl('lhkernel/alert_success.tpl.php'));?>
    <?php endif; ?>

    <div class="form-group">
        <label>Tenant ID</label>
        <input class="form-control form-control-sm" type="text" name="ms_tenant_id" value="<?php (isset($ms_options['ms_tenant_id'])) ? print htmlspecialchars($ms_options['ms_tenant_id']) : print ''?>" />
    </div>

    <div class="form-group">
        <label>Client ID</label>
        <input class="form-control form-control-sm" type="text" name="ms_client_id" value="<?php (isset($ms_options['ms_client_id'])) ? print htmlspecialchars($ms_options['ms_client_id']) : print ''?>" />
    </div>

    <div class="form-group">
        <label>Client Secret</label>
        <input class="form-control form-control-sm" type="text" name="ms_secret" value="<?php (isset($ms_options['ms_secret'])) ? print htmlspecialchars($ms_options['ms_secret']) : print ''?>" />
    </div>

    <input type="submit" class="btn btn-secondary" name="StoreOptions" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('system/buttons','Save'); ?>" />

</form>
