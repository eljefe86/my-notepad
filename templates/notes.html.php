<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>All Notes</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Text</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($notes as $note) :?>
                    <tr>
                        <td><?=$note['id'];?></td>
                        <td><?=$note['notetext'];?></td>
                        <td><?=$note['notedate'];?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
