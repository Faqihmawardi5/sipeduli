<div class="container mt-4">
    <h3>Penilaian Alternatif</h3>
    <form method="post" action="<?= base_url('penilaian/simpan') ?>">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Alternatif</th>
                    <?php foreach ($kriteria as $k): ?>
                        <th><?= $k->nama_kriteria ?></th>
                    <?php endforeach ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alternatif as $alt): ?>
                    <tr>
                        <td><?= $alt->nama_alternatif ?></td>
                        <?php foreach ($kriteria as $k): ?>
                            <td>
                                <select name="nilai[<?= $alt->id ?>][<?= $k->subkriteria[0]->id ?>]" class="form-control">
                                    <?php foreach ($k->subkriteria as $sub): ?>
                                        <option value="<?= $sub->nilai ?>"
                                            <?php
                                            $current = $penilaian[$alt->id][$sub->id] ?? null;
                                            if ($current == $sub->nilai) echo 'selected';
                                            ?>>
                                            <?= $sub->nama_subkriteria ?>
                                        </option>
                                    <?php endforeach ?>
                                </select>
                            </td>
                        <?php endforeach ?>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary">Simpan Penilaian</button>
    </form>
</div>
