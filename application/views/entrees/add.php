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
                <h3 class="box-title">Creation d'une nouvelle entree intrant</h3>
            </div>
            <?php echo form_open('entree/add'); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="fss_nom" class="control-label"><span class="text-danger">*</span>Nom du fournisseur</label>
                        <div class="form-group">
                            <input type="text" name="fss_nom" value="<?php echo $this->input->post('fss_nom'); ?>" class="form-control" id="fss_nom" />
                            <span class="text-danger"><?php echo form_error('fss_nom');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="fss_postnom" class="control-label"><span class="text-danger">*</span>Postnom du fournisseur</label>
                        <div class="form-group">
                            <input type="text" name="fss_postnom" value="<?php echo $this->input->post('fss_postnom'); ?>" class="form-control" id="fss_postnom" />
                            <span class="text-danger"><?php echo form_error('fss_postnom');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="fss_prenom" class="control-label"><span class="text-danger">*</span>Prenom du fournisseur</label>
                        <div class="form-group">
                            <input type="text" name="fss_prenom" value="<?php echo $this->input->post('fss_prenom'); ?>" class="form-control" id="fss_prenom" />
                            <span class="text-danger"><?php echo form_error('fss_prenom');?></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="fss_phone" class="control-label"><span class="text-danger">*</span>Numero telephone fournisseur</label>
                        <div class="form-group">
                            <input type="text" name="fss_phone" value="<?php echo $this->input->post('fss_phone'); ?>" class="form-control" id="fss_phone" />
                            <span class="text-danger"><?php echo form_error('fss_phone');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="fss_adresse" class="control-label"><span class="text-danger">*</span>Adresse du fournisseur</label>
                        <div class="form-group">
                            <input type="text" name="fss_adresse" value="<?php echo $this->input->post('fss_adresse'); ?>" class="form-control" id="fss_adresse" />
                            <span class="text-danger"><?php echo form_error('fss_adresse');?></span>
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
                        <label for="qte_entree" class="control-label">Quantite entree</label>
                        <div class="form-group">
                            <input type="number" name="qte_entree" min="1" value="<?php echo $this->input->post('qte_entree'); ?>" class="form-control" id="qte_entree" />
                            <span class="text-danger"><?php echo form_error('qte_entree');?></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="date_entree" class="control-label">Date entree</label>
                        <div class="form-group">
                            <input type="date" name="date_entree" max="<?= $current_day;?>"
                                   value="<?php echo $this->input->post('date_entree'); ?>" class="form-control" id="date_entree" />
                            <span class="text-danger"><?php echo form_error('date_entree');?></span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Enregistrer entree intrant
                </button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>