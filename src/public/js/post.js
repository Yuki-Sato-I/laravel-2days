function deleteGoods(e, id) {
  'use strict';
  if (confirm('本当に削除していいですか?')) {
    document.getElementById('del'+ id).submit();
  }
}