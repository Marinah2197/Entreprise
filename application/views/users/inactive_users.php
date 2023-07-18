<head>
    <title>Liste des utilisateurs inactifs</title>
</head>
<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div class="body-wrapper">
        <div class="container-fluid">
        <div class="card">
        <div class="card-body">
        <h2>Liste des utilisateurs inactifs</h2>
            <div class="panel panel-default">
            <div class="panel-body">
            <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr class="odd gradeX">
                <th>Matricule</th>
                <th>Nom</th>
                <th>Prénoms</th>
                <th>Poste/Emploi</th>
                <th>Date d'embauche</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['matricule']; ?></td>
                <td><?php echo $user['nom']; ?></td>
                <td><?php echo $user['prenom']; ?></td>
                <td><?php echo $user['poste']; ?></td>
                <td><?php echo $user['date_embauche']; ?></td>
                <td>
                    <a class="btn btn-primary btn-xs" 
                        href="<?php echo base_url('users/reactivate/'.$user['id']); ?>"
                        onclick="return confirm('Êtes-vous sûr de vouloir réactiver cet utilisateur ?')">
                    Réactiver</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
