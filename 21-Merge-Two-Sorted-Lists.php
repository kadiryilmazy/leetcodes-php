<?php
class ListNode
{
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

function createLinkedList(array $values)
{
    $dummy = new ListNode(); // Sanal bir başlangıç düğümü
    $current = $dummy;

    foreach ($values as $value) {
        $current->next = new ListNode($value);
        $current = $current->next;
    }

    return $dummy->next; // Gerçek başlangıç düğümünü döndür
}

// Yardımcı bir fonksiyon: Bir bağlı listeyi array'e dönüştürür
function linkedListToArray($head)
{
    $result = [];
    $current = $head;

    while ($current !== null) {
        $result[] = $current->val;
        $current = $current->next;
    }

    return $result;
}

// İki sıralı bağlı listeyi birleştirecek fonksiyon (boş bırakılmış)
function mergeTwoLists($list1, $list2)
{
    // Çözüm burada oluşturulacak
    return null;
}


$list1 = createLinkedList([1, 2, 4]);
$list2 = createLinkedList([1, 3, 4]);

$mergedList = mergeTwoLists($list1, $list2);

echo json_encode(linkedListToArray($mergedList));
