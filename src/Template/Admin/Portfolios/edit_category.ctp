<?php

use Cake\Routing\Router;
?>
<section id="content-wrapper">
    <div class="site-content-title">
        <h2 class="float-xs-left content-title-main">Add Portfolio Category</h2>

        <ol class="breadcrumb float-xs-right">
            <li class="breadcrumb-item">
                <span class="fs1" aria-hidden="true" data-icon=""></span>
                <a href="#">Main Menu</a>
            </li>
            <li class="breadcrumb-item active">View Portfolio Category</li>
        </ol>
    </div>
    <div class="content content-datatable datatable-width">
        <?= $this->Flash->render(); ?>
        <?= $this->Form->create($portfolioCategory); ?>
        <?php $this->Form->templates(NOWRAP_TEMPLATE); ?>
        <div class="all-form-section">
            <div class="row">                

                <div class="element-form">
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-xs-12 text-xs-right">
                        <label>Name</label>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <?= $this->Form->control('name', ['class' => 'form-control', 'label' => FALSE]) ?>
                        </div>
                    </div>
                </div>
<?php //print_r($portfolioCategory); ?>
				<div class="element-form">
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-xs-12 text-xs-right">
                        <label>Price</label>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <?= $this->Form->control('price', ['class' => 'form-control', 'label' => FALSE]) ?>
                        </div>
                    </div>
                </div>
				
				<div class="element-form">
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-xs-12 text-xs-right">
                        <label>Per Month/Per Year</label>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="form-group">
							<select name="permonthperyear" class="form-control">
								<option value="permonth">Per Month</option>
								<option value="peryear">Per Year</option>
							</select>
                        </div>
                    </div>
                </div>
				
				<div class="element-form">
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-xs-12 text-xs-right">
                        <label>Days</label>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <?= $this->Form->control('days', ['class' => 'form-control', 'label' => FALSE]) ?>
                        </div>
                    </div>
                </div>
				
				<div class="element-form">
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-xs-12 text-xs-right">
                        <label>Description</label>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <?= $this->Form->control('description', ['class' => 'form-control', 'label' => FALSE]) ?>
                        </div>
                    </div>
                </div>
				
                <div class="element-form">
                    <div class="col-xl-2 col-lg-3 col-sm-12 col-md-3 text-xs-right"></div>
                    <div class="col-xl-9 col-lg-9 col-sm-12 col-md-9 col-xs-12">
                        <?= $this->Form->button('Edit Category', ['type' => 'submit', 'class' => 'btn btn-success flat-buttons waves-effect waves-button']) ?>
                    </div>
                </div>
            </div>
        </div>

        <?= $this->Form->end(); ?>
    </div>
</section>

<?= $this->start('script'); ?>
<script>
    jQuery(document).ready(function () {
        $('.customer_list').on('change', function () {
            var customer_id = $(this).val();
            if (customer_id !== "0") {
                $.ajax({
                    url: "<?= Router::url(['controller' => 'App', 'action' => 'getDesignerOfCustomer', 'prefix' => FALSE], TRUE) ?>",
                    type: 'POST',
                    data: {
                        customer_id: customer_id
                    },
                    dataType: 'json',
                    success: function (data, textStatus, jqXHR) {
                        if (data.designer_id != '') {
                            $('.designer_list').val(data.designer_id);
                        } else {
                            $('.designer_list').val("0");
                        }
                    }

                });
            } else {
                $('.designer_list').val("0");
            }
        });
    });
</script>
<?= $this->end('script'); ?>