<style>
    #table-road
    {
        width: 100%;
        border-collapse: collapse;
    }

    .road
    {
        background-image: url("/vendor/anton-moskalenko/nexus/Pool/Images/Road.png");
        width: 200px;
        height: 58px;
        background-size: 30%;
        opacity: 0.5;
    }

    .hint .tooltiptext
    {
        display: none;
        position: absolute;
        background-color: white;
        border: black 1px solid;
        padding: 2px;
    }

    .hint:hover .tooltiptext
    {
        display: block;
    }
</style>

<table id="table-road">

    <?php foreach($group as $key_dt => $collection): ?>
        <?php foreach($collection as $entity): ?>
            <tr>
                <td>
                    <?php echo $entity->getTitle(); ?>
                </td>
                <td style="text-align: right;">
                    <a href="javascript:void(0)" onclick="API.Imperials.edit('<?php echo $entity->getKey(); ?>');">Edit</a> &diams;
                    <a href="javascript:void(0)" onclick="API.Imperials.remove('<?php echo $entity->getKey(); ?>');">Remove</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
</table>
