<?php

namespace App\DataTables;

use App\Penduduk;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;
use App\Bantuan;

class BantuanDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->editColumn('tanggal_mulai', function ($row){
                return $row->tanggal_mulai->format('d-m-Y');
            })
            ->editColumn('tanggal_selesai', function ($row){
                return $row->tanggal_selesai->format('d-m-Y');
            })
            ->addColumn('action', 'bantuan.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\App\Penduduk $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Bantuan $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('penduduk-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
            Column::make('nama'),
            Column::make('keterangan'),
            Column::make('asal_dana'),
            Column::make('tanggal_mulai'),
            Column::make('tanggal_selesai'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Bantuan_' . date('YmdHis');
    }
}
