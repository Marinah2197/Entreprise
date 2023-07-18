<!DOCTYPE html>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.min.css" '); ?>">
</head>

<body>
<div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
  <div class="d-flex align-items-center justify-content-center w-100">
    <div class="row justify-content-center w-100">
    <div class="col-md-8 col-lg-6 col-xxl-4">
    <div class="card mb-0">
    <div class="card-body">
    <h2 class="text-center">Connexion</h2>
    <?php if ($this->session->flashdata('message')): ?>
        <div><?php echo $this->session->flashdata('message'); ?></div>
    <?php endif; ?>

    <?php echo form_open('register/authenticate'); ?>
    <div>
    <label class="form-label">Matricule:</label>
    <input type="text" class="form-control" name="matricule" id="matricule">
    </div><br>
    
    <div>
    <label class="form-label">Code d'accès:</label>
    <input type="password"  class="form-control" name="code_acces" id="code_acces">
    </div><br>
    
    <div>
    <input type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" value="Se connecter">
    </div>
    
    <?php echo form_close(); ?>

    <div class="d-flex align-items-center justify-content-center">
    <p class="fs-4 mb-0 fw-bold">Nouveau utilisateur?</p>
    <a class="text-primary fw-bold ms-2" href="<?php echo base_url('register/register'); ?>">S'incrire</a>
    </div>

  

  <script src="<?php echo base_url('assets/libs/jquery/dist/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>

</body>
</html>

