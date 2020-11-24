<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Intrants Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('intrant/add'); ?>" class="btn btn-success btn-sm">Ajouter un nouvel intrant</a>
                </div>
            </div>
            <div class="box-body">
            <div class="table-responsive">
                <table class="table-sm table table-striped table-condensed">
                    <tr>
                        <th>#</th>
                        <th>Libelle Intrant</th>
                        <th>Quantite Stock</th>
                        <th>Categorie</th>
                        <th>Date Ajout</th>
                        <th>Actions</th>
                    </tr>
                    <?php $count=1; foreach($all_intrants as $t){ ?>
                        <tr>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $t->libelle; ?></td>
                            <td><?php echo $t->qte_stock; ?></td>
                            <td><?php echo $t->categorie_sid ?></td>
                            <td><?php echo $t->date_ajout ?></td>
                            <td>
                                <a href="<?php echo site_url('intrant/edit/'.$t->intrant_id); ?>"
                                   class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Modifier</a>
                            </td>
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
