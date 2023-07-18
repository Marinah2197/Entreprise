<head>
    <title>Modifier un utilisateur</title>
</head>
<body>
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div class="body-wrapper col-6" >
    <div class="container-fluid">
        <div class="container-fluid">
        <div class="card">
        <div class="card-body">
    <h2>Modifier un utilisateur</h2>
    <?php echo validation_errors(); ?>

    <?php echo form_open('users/edit/'.$user['id']); ?>
    <div>
    <label class="form-label">Matricule:</label>
    <input class="form-control" type="text" name="matricule" value="<?php echo $user['matricule']; ?>" readonly>
    </div>
    
    <div>
    <label class="form-label">Nom:</label>
    <input class="form-control" type="text" name="nom" value="<?php echo set_value('nom', $user['nom']); ?>">
    </div>

    <div>
    <label class="form-label">Prénom:</label>
    <input class="form-control" type="text" name="prenom" value="<?php echo set_value('prenom', $user['prenom']); ?>">        
    </div>

    <div>
    <label class="form-label">Date d'embauche:</label>
    <input class="form-control" type="date" name="date_embauche" value="<?php echo set_value('date_embauche', $user['date_embauche']); ?>" readonly>
    </div>

    <div>
    <label class="form-label">Poste ou emploi:</label>
    <input class="form-control" type="text" name="poste" value="<?php echo set_value('poste', $user['poste']); ?>">
    </div>
   
    <div>
    <label class="form-label">Email:</label>
    <input class="form-control" type="email" name="email" value="<?php echo set_value('email', $user['email']); ?>">
    </div><br>

    <div>
    <input class="btn btn-primary" type="submit" value="Modifier" onclick="return confirm('Êtes-vous sûr de vouloir modifier cet utilisateur ?')">
    <a class="btn btn-danger" href="<?php echo base_url('users/index'); ?>">Annuler</a>
    </div>
    <?php echo form_close(); ?>


