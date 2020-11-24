<?php
$date_jour = date('Y-m-d');
//Date minimale
//$date_max_naissance = new DateTime($date_jour);
//$date_max_naissance->modify('-18 year');
$date_max_naissance = ((new DateTime())->modify('-18 year'))->format('Y-m-d');
?>
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Creation d'un nouvel intrant</h3>
            </div>
            <?php echo form_open('intrant/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="libelle" class="control-label"><span class="text-danger">*</span>Libelle ou nom intrant</label>
						<div class="form-group">
							<input type="text" name="libelle" value="<?php echo $this->input->post('libelle'); ?>" class="form-control" id="libelle" />
							<span class="text-danger"><?php echo form_error('libelle');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qte_stock" class="control-label">Quantite Stock</label>
						<div class="form-group">
							<input type="number" name="qte_stock" min="1" value="<?php echo $this->input->post('qte_stock'); ?>" class="form-control" id="qte_stock" />
							<span class="text-danger"><?php echo form_error('qte_stock');?></span>
						</div>
					</div>

					<div class="col-md-6">
						<label for="categorie_sid" class="control-label">Categorie</label>

                        <div class="form-group">
                            <input list="brow_candidat" name="categorie_sid"
                                   class="form-control text-capitalize"
                                   id="categorie_sid" type="text" placeholder="Categorie..."
                                   value="<?= set_value('categorie_sid'); ?>">
                            <datalist id="brow_candidat">
                                <option disabled>Selectionnez categorie</option>
                                <?php
                                if (isset($all_categories)) {
                                    foreach ($all_categories as $candidat) :?>
                                        <option value="<?= ucwords($candidat->designation); ?>">
                                            <?= ucwords($candidat->designation); ?>
                                        </option>
                                    <?php endforeach;
                                } ?>
                            </datalist>
                            <span class="text-danger small"><?php echo form_error('categorie_sid'); ?></span>
                        </div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Enregistrer intrant
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>