<head>
    <title>Ajouter un utilisateur</title>
</head>
<body>
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div class="body-wrapper col-6" >
    <div class="container-fluid">
        <div class="container-fluid">
        <div class="card">
        <div class="card-body">

    <h2>Ajouter un utilisateur</h2>
    <?php echo validation_errors(); ?>

    <?php echo form_open('users/add'); ?>
    <div>
    <label class="form-label">Matricule (*):</label>
    <input class="form-control" type="text" name="matricule"  value="<?php echo set_value('matricule'); ?>" required>
    </div><br>

    <div>
    <label class="form-label">Nom (*):</label>
    <input class="form-control" type="text" name="nom" value="<?php echo set_value('nom'); ?>" required>
    </div><br>

    <div>
    <label class="form-label">Prénoms (*):</label>
    <input class="form-control" type="text" name="prenom" value="<?php echo set_value('prenom'); ?>" required>
    </div><br>

    <div>
    <label class="form-label">Date d'embauche (*):</label>
    <input class="form-control" type="date" name="date_embauche" value="<?php echo set_value('date_embauche'); ?>" required>
    </div><br>

    <div>
    <label class="form-label">Poste ou emploi (*):</label>
    <input class="form-control" type="text" name="poste" value="<?php echo set_value('poste'); ?>" required>
    </div><br>

    <div>
    <label class="form-label">Email (*):</label>
    <input class="form-control" type="email" name="email" value="<?php echo set_value('email'); ?>" required>
    </div><br>

    <div>
    <label class="form-label">Type d'utilisateur (*):</label>
    <select class="form-select" name="type_utilisateur" required>
        <option value="employe">Employé</option>
        <option value="manager">Manager</option>
        <option value="administrateur">Administrateur</option>
    </select>
    </div><br>

    <div>
    <p>(*): champ obligatoire</p>
    <input type="submit" class="btn btn-primary"  value="Ajouter">
    <a class="btn btn-danger" href="<?php echo base_url('users/index'); ?>">Annuler</a>
    </div>
    
    <?php echo form_close(); ?>
