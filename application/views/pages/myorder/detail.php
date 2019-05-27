<main class="container">
	<div class="row">
		<div class="col-md-3">
			<?php $this->load->view('layouts/_sidebar') ?>
		</div>
		<div class="col-md-9">
			<div class="card">
				<div class="card-header">
					Detail Order #01234123
					<div class="float-right">
						<?php $this->load->view('layouts/_status', ['status' => $order->status]) ?>
					</div>
				</div>
				<div class="card-body">
					<p>Nama: <?= $order->name ?></p>
					<p>Telepon: <?= $order->phone ?></p>
					<p>Alamat: <?= $order->address ?></p>
					<table class="table">
						<thead>
							<tr>
								<th>Produk</th>
								<th class="text-center">Harga</th>
								<th class="text-center">Jumlah</th>
								<th class="text-center">Subtotal</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($order_detail as $row): ?>
								<tr>
									<td>
										<p><img src="<?= base_url("/images/product/$row->image") ?>" alt="" height="50"> <strong><?= $row->title ?></strong></p>
									</td>
									<td class="text-center">Rp<?= number_format($row->price, 0 ,',','.') ?>,-</td>
									<td class="text-center"><?= $row->qty ?></td>
									<td class="text-center">Rp<?= number_format($row->subtotal, 0 ,',','.') ?>,-</td>
								</tr>
							<?php endforeach ?>
							<tr>
								<td colspan="3"><strong>Total:</strong></td>
								<td class="text-center"><strong>Rp<?= number_format(array_sum(array_column($order_detail, 'subtotal')), 0 ,',','.') ?>,-</strong></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="card-footer">
					<a href="/orders-confirm.html" class="btn btn-success">Konfirmasi Pembayaran</a>
				</div>
			</div>
		</div>
	</div>
</main>