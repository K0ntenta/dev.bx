# ���������� ���������� ���� ������� ������ (������������).
# ������� ������: ��� ������, ����� ���������� ����.

SELECT a.NAME,
       count(*)

FROM author a
	INNER JOIN author_book ab on a.ID = ab.AUTHOR_ID
GROUP BY a.ID;

# ���������� ��������� ������� ���� ������� ������ �� ���� ���������.
# ������� ������: ��� ������, ����� ��������, ��������� ������� ����.

SELECT a.NAME,
       s.CITY,
       sum(QUANTITY)

FROM book_store bs
    INNER JOIN store s on bs.STORE_ID = s.ID
	INNER JOIN author_book ab on bs.BOOK_ID = ab.BOOK_ID
	INNER JOIN author a on ab.AUTHOR_ID = a.ID
GROUP BY a.NAME, s.CITY;

# ������� ������� ��������� ���� ������������ �������.
# ������� ������: �������� �����, ������� ���������.

SELECT b.NAME,
       AVG(PRICE)
From book b
	INNER JOIN book_store bs on b.ID = bs.BOOK_ID
	INNER JOIN publisher p on b.PUBLISHER_ID = p.ID
WHERE p.ID=3;

# ������� ������� ��������� ���� ������������ ������� � ������ ��������.
# ������� ������: �����, �������� �����, ������� ���������.

SELECT s.CITY,
       b.NAME,
       AVG(PRICE)
From book b
	INNER JOIN book_store bs on b.ID = bs.BOOK_ID
	INNER JOIN publisher p on b.PUBLISHER_ID = p.ID
	INNER JOIN store s on bs.STORE_ID = s.ID
WHERE p.ID=3
GROUP BY s.CITY, b.NAME;

# ������� ������� ����� �������� ���� � ������������ � �����������.
# ������� ������: �������� �����, ������� � ������������, ������� � �����������, �������.

SELECT b.NAME,
       sum(IF(store_id = 1, QUANTITY, 0)) AS QUANTITY_KLD,
       sum(IF(store_id = 2, QUANTITY, 0)) AS QUANTITY_CHK,
       sum(IF(store_id = 1, QUANTITY, 0)) - sum(IF (store_id = 2, QUANTITY, 0)) AS DIFF
FROM book_store bs
	INNER JOIN book b on bs.BOOK_ID = b.ID
GROUP BY b.NAME;