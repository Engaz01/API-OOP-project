<h1 class="title"><?php print $data['title'] ?></h1>
<h2 class="heading"><?php print $data['heading'] ?></h2>

<!-- All the pizza items will be generated by JS in this container -->
<section id="pizza-grid-container"></section>

<!-- Create form can be pre-rendered -->
<?php if (isset($data['forms']['create'])): ?>
    <div class="create-form-wrapper">
        <?php print $data['forms']['create']; ?>
    </div>
<?php endif; ?>

<!-- Update Modal (Popup)-->
<?php if (isset($data['forms']['update'])): ?>
    <div id="update-modal" class="modal">
        <div class="wrapper">
            <span class="close">&times;</span>
            <?php print $data['forms']['update']; ?>
        </div>
    </div>
<?php endif; ?>

<?php foreach ($data['links'] as $link): ?>
    <?php print $link; ?>
<?php endforeach; ?>