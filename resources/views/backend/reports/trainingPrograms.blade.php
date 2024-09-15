<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Training Programs Report</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Source of Competency</th>
                <th>Module Duration</th>
                <th>Number of Trainees</th>
                <th>Training Duration</th>
                <th>Entry Requirements</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trainingPrograms as $program)
                <tr>
                    <td>{{ $program->name }}</td>
                    <td>{{ $program->source_of_competency }}</td>
                    <td>{{ $program->module_duration }}</td>
                    <td>{{ $program->number_of_trainees }}</td>
                    <td>{{ $program->training_duration }}</td>
                    <td>{{ $program->entry_requirements }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
