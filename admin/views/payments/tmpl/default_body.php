<?php
defined('_JEXEC') or die;
foreach ($this->items as $i => $item) : ?>
    <tr>
        <td>
            <?php echo $item->id; ?>
        </td>
        <td>
            <?php echo $item->payer; ?>
        </td>
        <td>
            <?php echo $item->sum; ?>
        </td>
        <td>
            <?php 
            $db=JFactory::getDbo();
            $query = $db->getQuery(true);
            $fields = array('title');
            $query->select($db->quoteName($fields))
                ->from($db->quoteName('#__content'))
                ->where($db->quoteName('id') . ' = '.$item->fund);
            $db->setQuery($query);
            $result = $db->loadObjectList();
            echo $result[0]->title;
            

            ?>
        </td>
        <td>
            <?php echo date("Y-m-d H:i:s",$item->date); ?>
        </td>                      
    </tr>
<?php endforeach; ?>