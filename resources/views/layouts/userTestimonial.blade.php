@if (count($testimonials) > 0)
    <div class="panel panel-default">
    <div class="panel-heading">
    Current Tasks
</div>

<div class="panel-body">
    <table class="table table-striped task-table">
    <thead>
    <th>Testimonials</th>
    <th>&nbsp;</th>
</thead>
<tbody>
@foreach ($testimonials as $testimonial)
<tr>
<td class="table-text"><div>{{ $testimonial->title }}</div></td>

<!-- Task Delete Button -->
<td>
    <td class="table-text"><div>{{ $testimonial->description }}</div></td>

    <!-- Task Delete Button -->
    <td>
    </td>
    </tr>
@endforeach
</tbody>
</table>
</div>
</div>
@endif