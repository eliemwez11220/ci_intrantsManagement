<?php
$current_day = date('Y-m-d');
//Date minimale
//$date_max_naissance = new DateTime($date_jour);
//$date_max_naissance->modify('-18 year');
$date_max_naissance = ((new DateTime())->modify('-18 year'))->format('Y-m-d');
?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Creation d'une nouvelle demande intrant</h3>
                <?php if (isset($error_sortie)) { ?>
                    <div class="alert alert-danger text-center">
                        <span class="h5"><?= $error_sortie; ?></span>
                    </div>
                <?php } elseif (isset($success)) { ?>
                    <div class="alert alert-success text-center">
                        <span class="h5"><?= $success; ?></span>
                    </div>
                <?php } ?>
            </div>
            <?php echo form_open('demande/add'); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="benef_nom" class="control-label"><span class="text-danger">*</span>Nom du Bénéficiaire</label>
                        <div class="form-group">
                            <input type="text" name="benef_nom" value="<?php echo $this->input->post('benef_nom'); ?>" class="form-control" id="benef_nom" />
                            <span class="text-danger"><?php echo form_error('benef_nom');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="benef_postnom" class="control-label"><span class="text-danger">*</span>Postnom du Bénéficiaire</label>
                        <div class="form-group">
                            <input type="text" name="benef_postnom" value="<?php echo $this->input->post('benef_postnom'); ?>"
                                   class="form-control" id="benef_postnom" />
                            <span class="text-danger"><?php echo form_error('benef_postnom');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="benef_prenom" class="control-label"><span class="text-danger">*</span>Prenom du Bénéficiaire</label>
                        <div class="form-group">
                            <input type="text" name="benef_prenom" value="<?php echo $this->input->post('benef_prenom'); ?>" class="form-control" id="benef_prenom" />
                            <span class="text-danger"><?php echo form_error('benef_prenom');?></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="benef_phone" class="control-label"><span class="text-danger">*</span>Numero telephone Bénéficiaire</label>
                        <div class="form-group">
                            <input type="text" name="benef_phone" value="<?php echo $this->input->post('benef_phone'); ?>" class="form-control" id="benef_phone" />
                            <span class="text-danger"><?php echo form_error('benef_phone');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="benef_adresse" class="control-label"><span class="text-danger">*</span>Adresse du Bénéficiaire</label>
                        <div class="form-group">
                            <input type="text" name="benef_adresse" value="<?php echo $this->input->post('benef_adresse'); ?>"
                                   class="form-control" id="benef_adresse" />
                            <span class="text-danger"><?php echo form_error('benef_adresse');?></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="intrant_sid" class="control-label">Libelle entrant</label>

                        <div class="form-group">
                            <input list="brow_intrant" name="intrant_sid"
                                   class="form-control text-capitalize"
                                   id="intrant_sid" type="text" placeholder="Intrant..."
                                   value="<?= set_value('intrant_sid'); ?>">
                            <datalist id="brow_intrant">
                                <option disabled>Selectionnez Intrant</option>
                                <?php
                                if (isset($all_intrants)) {
                                    foreach ($all_intrants as $intrant) :?>
                                        <option value=" <?= $intrant->intrant_id; ?>-<?= ucwords($intrant->libelle); ?>">
                                            <?= ucwords($intrant->libelle); ?>
                                        </option>
                                    <?php endforeach;
                                } ?>
                            </datalist>
                            <span class="text-danger small"><?php echo form_error('intrant_sid'); ?></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="qte_demandee" class="control-label">Quantité demandée</label>
                        <div class="form-group">
                            <input type="number" name="qte_demandee" min="1" value="<?php echo $this->input->post('qte_demandee'); ?>"
                                   class="form-control" id="qte_demandee" />
                            <span class="text-danger"><?php echo form_error('qte_demandee');?></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="date_demandee" class="control-label">Date demandée</label>
                        <div class="form-group">
                            <input type="date" name="date_demandee" max="<?= $current_day;?>"
                                   value="<?php echo $this->input->post('date_demandee'); ?>" class="form-control" id="date_demandee" />
                            <span class="text-danger"><?php echo form_error('date_demandee');?></span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Enregistrer demande intrant
                </button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>