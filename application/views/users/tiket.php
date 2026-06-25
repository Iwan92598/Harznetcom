<div class="card">
    <div class="card-header">
    <h3 class="card-title">Tiket</h3>
    <div class="card-tools">
        <div class="input-group input-group-sm" style="width: 16rem">
        <span class="input-group-text">
            <i class="bi bi-search" aria-hidden="true"></i>
        </span>
        <input
            id="table-filter"
            type="search"
            class="form-control"
            placeholder="Filter rows…"
            aria-label="Filter rows"
        />
        </div>
    </div>
    </div>
    <div class="card-body">
    <div class="d-flex gap-2 mb-3">
        <button id="export-csv" type="button" class="btn btn-sm btn-outline-secondary">
        <i class="bi bi-filetype-csv me-1" aria-hidden="true"></i>
        Export CSV
        </button>
        <button id="export-json" type="button" class="btn btn-sm btn-outline-secondary">
        <i class="bi bi-filetype-json me-1" aria-hidden="true"></i>
        Export JSON
        </button>
        <button id="print-table" type="button" class="btn btn-sm btn-outline-secondary">
        <i class="bi bi-printer me-1" aria-hidden="true"></i>
        Print
        </button>
    </div>
    <div id="users-table"></div>
    </div>
    <div class="card-footer text-secondary small">
    <!-- Powered by
    <a href="https://tabulator.info/" target="_blank" rel="noopener">Tabulator</a>
    &mdash; vanilla JS, no jQuery required. -->
    </div>
</div>
