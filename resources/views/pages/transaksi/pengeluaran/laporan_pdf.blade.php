@extends('layouts.laporan')
@section('title',"Laporan Pengeluaran $periode")
@section('content')
    <table>
        <tr>
            <td>Hal</td>
            <td>: Laporan Pengeluaran</td>
        </tr>
        <tr>
            <td>Periode</td>
            <td>: {{ $periode }}</td>
        </tr>
    </table>
    <table class="tabel-info">
        <thead>
            <tr>
                <th>No.</th>
                <th>Tanggal</th>
                <th>Perincian</th>
                <th>Jumlah (Rp)</th>
            </tr>
        </thead>
        <tbody>
            @php
                $total = 0;
            @endphp
            @forelse ($items as $item)
                <tr>
                    <td>{{ $loop->iteration }}.</td>
                    <td>{{ $item->tanggal->isoFormat('D/MM/YYYY') }}</td>
                    <td>{!! $item->perincian !!}</td>
                    <td>{{ number_format($item->jumlah,2,',','.') }}</td>
                    @php
                        $total += $item->jumlah;
                    @endphp
                </tr>
            @empty

            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3"><b>Total</b></th>
                <th class="total"><b>{{ number_format($total,2,',','.') }}</b></th>
            </tr>
        </tfoot>
    </table>
@endsection
