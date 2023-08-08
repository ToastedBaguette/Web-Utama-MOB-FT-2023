<div class="modal-header">
    <h4 class="modal-title">Pelanggaran&nbsp;<span class="text-primary"><?php echo e($dataTampil[0]->users_nrp); ?></span></h4>
</div>
<div class="modal-body ml-3">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Tanggal</th>
                <th scope="col">Pelanggaran</th>
                <th scope="col">Keterangan</th>
            </tr>
        </thead>
        <tbody>
        <?php for($i = 0; $i < count($dataTampil); $i++): ?>
            <tr>
                <td><?php echo e($date[$i]); ?></td>
                <td><?php echo e($dataTampil[$i]->nama_pelanggaran); ?></td>
                <td><?php echo e($dataTampil[$i]->keterangan); ?></td>
            </tr>
        <?php endfor; ?>
        </tbody>
    </table>
</div><?php /**PATH C:\Github Repository\Web-Utama-MOB-FT-2023\resources\views/sfd/showrekap2.blade.php ENDPATH**/ ?>