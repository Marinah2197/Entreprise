<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.min.css'); ?>" />
</head>
<body>
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
<div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
    <div class="d-flex align-items-center justify-content-center w-100">
    <div class="row justify-content-center w-100">
    <div class="col-md-6 col-lg-6 col-xxl-6">
    <div class="card mb-0">
    <div class="card-body">
    <h2 class="text-center">Inscription</h2>
    <?php echo validation_errors(); ?>

    <?php echo form_open('register/register'); ?>
<div class="form-group">
    <div>
    <label class="form-label">Matricule(*):</label>
    <input type="text" class="form-control" name="matricule" value="<?php echo set_value('matricule'); ?>" required>
    <?php echo form_error('matricule', '<div class="text-danger">', '</div>'); ?>
    </div><br>

    <div>
    <label class="form-label">Nom(*):</label>
    <input type="text" class="form-control" name="nom" value="<?php echo set_value('nom'); ?>" required>
    </div><br>

    <div>
    <label class="form-label">Prénoms(*):</label>
    <input type="text" class="form-control" name="prenom" value="<?php echo set_value('prenom'); ?>" required>
    </div><br>

   
<div class="form-group">
    <label class="form-label">Date d'embauche(*):</label>
    <input type="date" class="form-control" name="date_embauche" value="<?php echo set_value('date_embauche'); ?>" required>
    </div><br>

    <div>
    <label class="form-label">Poste ou emploi(*):</label>
    <input type="text" class="form-control" name="poste" value="<?php echo set_value('poste'); ?>" required>
    </div><br>

    <div>
    <label class="form-label">Email(*):</label>
    <input type="email"  class="form-control" name="email" value="<?php echo set_value('email'); ?>" required> 
    </div><br>

    <div>
    <label class="form-label">Type d'utilisateur(*):</label>
    <select class="form-select" name="type_utilisateur">
        <option value="employe">Employé</option>
        <option value="manager">Manager</option>
        <option value="administrateur">Administrateur</option>
    </select>
    </div>
<div>

</div>
 <br>

    <div>
        <p>(*): Champs obligatoire</p>
    <input type="submit"  class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" value="S'inscrire">
    </div>

    <div class="d-flex align-items-center justify-content-center">
    <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
    <a class="text-primary fw-bold ms-2" href="<?php echo base_url('register/login'); ?>">Se connecter</a>
    </div>
    
    <?php echo form_close(); ?>
</body>
</html>