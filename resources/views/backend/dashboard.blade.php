@extends('backend.layouts.app')

@section('content')
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Bootstrap Icons (optional for icons) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <div class="container py-4">
  <div class="d-flex flex-wrap gap-3 justify-content-between">
    
    <!-- Card 1 -->
    <div class="card shadow-sm" style="width: 18rem;">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="bg-primary text-white p-3 rounded-circle">
            <!-- Icon -->
            <i class="bi bi-people-fill"></i>
          </div>
          <div class="ms-3">
            <h5 class="card-title">Users</h5>
            <p class="card-text">Total Active Users</p>
          </div>
        </div>
        <div class="mt-4">
          <h2 class="font-weight-bold">1,245</h2>
          <p class="text-muted">Compared to last month</p>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="card shadow-sm" style="width: 18rem;">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="bg-success text-white p-3 rounded-circle">
            <!-- Icon -->
            <i class="bi bi-currency-dollar"></i>
          </div>
          <div class="ms-3">
            <h5 class="card-title">Revenue</h5>
            <p class="card-text">Total Revenue</p>
          </div>
        </div>
        <div class="mt-4">
          <h2 class="font-weight-bold">$24,560</h2>
          <p class="text-muted">Compared to last month</p>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="card shadow-sm" style="width: 18rem;">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="bg-danger text-white p-3 rounded-circle">
            <!-- Icon -->
            <i class="bi bi-wallet-fill"></i>
          </div>
          <div class="ms-3">
            <h5 class="card-title">Expenses</h5>
            <p class="card-text">Total Expenses</p>
          </div>
        </div>
        <div class="mt-4">
          <h2 class="font-weight-bold">$5,820</h2>
          <p class="text-muted">Compared to last month</p>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="card shadow-sm" style="width: 18rem;">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="bg-warning text-white p-3 rounded-circle">
            <!-- Icon -->
            <i class="bi bi-bar-chart-fill"></i>
          </div>
          <div class="ms-3">
            <h5 class="card-title">Profit</h5>
            <p class="card-text">Net Profit</p>
          </div>
        </div>
        <div class="mt-4">
          <h2 class="font-weight-bold">$18,740</h2>
          <p class="text-muted">Compared to last month</p>
        </div>
      </div>
    </div>
    
  </div>
</div>


<div class="container py-4">
  <div class="row g-4">
    
    <!-- Line Chart -->
    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Sales Over Time (Line Chart)</h5>
          <canvas id="lineChart"></canvas>
        </div>
      </div>
    </div>

    <!-- Bar Chart -->
    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Product Sales Comparison (Bar Chart)</h5>
          <canvas id="barChart"></canvas>
        </div>
      </div>
    </div>


  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>



<!-- Chart.js Configuration -->
<script>
  // Line Chart
  const lineCtx = document.getElementById('lineChart').getContext('2d');
  const lineChart = new Chart(lineCtx, {
    type: 'line',
    data: {
      labels: ['January', 'February', 'March', 'April', 'May', 'June'],
      datasets: [{
        label: 'Sales',
        data: [1200, 1500, 1000, 2000, 2300, 1700],
        borderColor: 'rgba(75, 192, 192, 1)',
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        fill: true
      }]
    },
    options: {
      responsive: true,
    }
  });

  // Bar Chart
  const barCtx = document.getElementById('barChart').getContext('2d');
  const barChart = new Chart(barCtx, {
    type: 'bar',
    data: {
      labels: ['Product A', 'Product B', 'Product C', 'Product D'],
      datasets: [{
        label: 'Sales',
        data: [200, 300, 400, 500],
        backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)'],
        borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)'],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
    }
  });

  // Pie Chart
  const pieCtx = document.getElementById('pieChart').getContext('2d');
  const pieChart = new Chart(pieCtx, {
    type: 'pie',
    data: {
      labels: ['Company A', 'Company B', 'Company C', 'Company D'],
      datasets: [{
        label: 'Market Share',
        data: [25, 35, 15, 25],
        backgroundColor: ['rgba(255, 99, 132, 0.6)', 'rgba(54, 162, 235, 0.6)', 'rgba(255, 206, 86, 0.6)', 'rgba(75, 192, 192, 0.6)'],
        borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)'],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
    }
  });

  // Doughnut Chart
  const doughnutCtx = document.getElementById('doughnutChart').getContext('2d');
  const doughnutChart = new Chart(doughnutCtx, {
    type: 'doughnut',
    data: {
      labels: ['Marketing', 'Development', 'Operations', 'HR'],
      datasets: [{
        label: 'Expenses',
        data: [5000, 7000, 3000, 2000],
        backgroundColor: ['rgba(255, 159, 64, 0.6)', 'rgba(153, 102, 255, 0.6)', 'rgba(255, 206, 86, 0.6)', 'rgba(75, 192, 192, 0.6)'],
        borderColor: ['rgba(255, 159, 64, 1)', 'rgba(153, 102, 255, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)'],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
    }
  });
</script>
<!-- Bootstrap JS (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

@endsection
