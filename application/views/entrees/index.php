<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing des intrants entrees</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('entree/add'); ?>" class="btn btn-success btn-sm">Ajouter une nouvelle entree</a>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-striped table-sm table-condensed">
                        <tr>
                            <th>#</th>
                            <th>Code Intrant</th>
                            <th>Quantite entree</th>
                            <th>Date entree</th>
                            <th>Nom Fss</th>
                            <th>Postnom Fss</th>
                            <th>Prenom Fss</th>
                            <th>Telephone Fss</th>
                            <th>Adresse Fss</th>
                        </tr>
                        <?php $count=1; foreach($all_entrees as $t){ ?>
                            <tr>
                                <td><?php echo $count++; ?></td>
                                <td><?php echo $t->intrant_sid; ?></td>
                                <td><?php echo $t->qte_entree; ?></td>
                                <td><?php echo $t->date_entree; ?></td>
                                <td><?php echo $t->fss_nom; ?></td>
                                <td><?php echo $t->fss_postnom; ?></td>
                                <td><?php echo $t->fss_prenom; ?></td>
                                <td><?php echo $t->fss_phone; ?></td>
                                <td><?php echo $t->fss_adresse; ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>

        </div>
    </div>
</div>
