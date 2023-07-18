<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
<div class="body-wrapper">
<div class="container-fluid">
<div class="card">
<div class="card-body">
<h2>Informatios générales</h2> 
    <?php if ($this->session->userdata('id')) : ?>
        <p>Nom: <?php echo $this->session->userdata('nom'); ?></p>
        <p>Prénoms: <?php echo $this->session->userdata('prenom'); ?></p>
        <p>Date embauche: <?php echo $this->session->userdata('date_embauche'); ?></p>
        <p>Poste: <?php echo $this->session->userdata('poste'); ?></p>
        <p>Type: <?php echo $this->session->userdata('type_utilisateur'); ?></p>
        <p>Email: <?php echo $this->session->userdata('email'); ?></p>
        <p>Code d'accès: <?php echo $this->session->userdata('code_acces'); ?></p>
        <a class="btn btn-primary" href="<?php echo base_url('users/edit_profil'); ?>">Modifier</a>
        <a class="btn btn-primary" href="<?php echo base_url('users/index'); ?>">Retour</a>
    <?php else : ?>
        <p>Accès non autorisé. Veuillez vous connecter.</p>
    <?php endif; ?>
</div>
</div>
</div>
</div>
</div>