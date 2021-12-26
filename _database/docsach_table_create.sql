CREATE TABLE chitietsach (
    IdChitietsach int(11) NOT NULL AUTO_INCREMENT,
    idSach int(11) NOT NULL,
    tomtatND text(1000) NOT NULL,
    Luotxem int(11) NOT NULL DEFAULT 0,
    CHECK (luotxem >= 0),
    Favorite int(11) NOT NULL DEFAULT 0,
    CHECK (favorite >= 0),
    Feedback int(11) DEFAULT 0,
    Sotrang int(11) NOT NULL DEFAULT 0,
    CHECK (Sotrang >= 0),
    PRIMARY KEY (IdChitietsach)
);

CREATE TABLE tblaccount (
    idMember int(11) NOT NULL AUTO_INCREMENT,
    username varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    IMG varchar(255) DEFAULT 'https://dvdn247.net/wp-content/uploads/2020/07/avatar-mac-dinh-1.png',
    Gioitinh varchar(4),
    CHECK (Gioitinh in ('Nam', 'Nữ')),
    Ngaysinh date,
    idquyen int(11) NOT NULL DEFAULT 2, -- 2 là id quyền user, 1 là id quyền admin
    PRIMARY KEY (idMember)
);

CREATE TABLE tblchuong (
    idChuong int(11) NOT NULL AUTO_INCREMENT,
    idSach int(11) NOT NULL,
    TenChuong varchar(255) NOT NULL,
    noidung longtext NOT NULL,
    PRIMARY KEY (idchuong)
);

CREATE TABLE tbldanhgia (
    idDanhgia int(11) NOT NULL AUTO_INCREMENT,
    idMember int(11) NOT NULL,
    idSach int(11) NOT NULL,
    Noidung text(250) NOT NULL,
    Thoigian date NOT NULL,
    PRIMARY KEY (iddanhgia)
);

CREATE TABLE tbldanhmuc (
    idDanhmuc int(11) NOT NULL AUTO_INCREMENT,
    Tendanhmuc varchar(255) NOT NULL,
    PRIMARY KEY (iddanhmuc)
);


CREATE TABLE tblfavorite (
    idSach int(11) NOT NULL,
    idMember int(11) NOT NULL,
    PRIMARY KEY (idsach, idmember)
);


CREATE TABLE tblsach (
    idSach int(11) NOT NULL AUTO_INCREMENT,
    imgSach varchar(255) NOT NULL,
    Tensach varchar(255) NOT NULL,
    Tacgia varchar(255) NOT NULL,
    NXB int(11) NOT NULL,
    idDanhmuc int(11) NOT NULL,
    NgayDang date NOT NULL,
    PRIMARY KEY (idsach)
);

CREATE TABLE banner (
    idbanner int(3) NOT NULL AUTO_INCREMENT,
    img varchar(200) NOT NULL,
    PRIMARY KEY (idbanner)
);


CREATE TABLE phanquyen (
    idquyen int(11) NOT NULL AUTO_INCREMENT,
    tenquyen varchar(100) NOT NULL,
    chitiet text(500),
    PRIMARY KEY (idquyen)
);


ALTER TABLE chitietsach ADD CONSTRAINT FK_chitietsach__idsach FOREIGN KEY (idsach) REFERENCES tblsach(idsach) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE tblaccount ADD CONSTRAINT FK_tblaccount__idquyen FOREIGN KEY (idquyen) REFERENCES phanquyen(idquyen) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE tblchuong ADD CONSTRAINT FK_tblchuong__idsach FOREIGN KEY (idsach) REFERENCES tblsach(idsach) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE tbldanhgia ADD CONSTRAINT FK_tbldanhgia__idmember FOREIGN KEY (idmember) REFERENCES tblaccount(idmember) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE tbldanhgia ADD CONSTRAINT FK_tbldanhgia__idsach FOREIGN KEY (idsach) REFERENCES tblsach(idsach) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE tblfavorite ADD CONSTRAINT FK_tblfavorite__idsach FOREIGN KEY (idsach) REFERENCES tblsach(idsach) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE tblfavorite ADD CONSTRAINT FK_tblfavorite__idmember FOREIGN KEY (idmember) REFERENCES  tblaccount(idmember) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE tblsach ADD CONSTRAINT FK_tblsach__iddanhmuc FOREIGN KEY (iddanhmuc) REFERENCES  tbldanhmuc(iddanhmuc) ON DELETE CASCADE ON UPDATE CASCADE;

-- Trigger

DELIMITER $$
CREATE TRIGGER `add_luotcmt` AFTER INSERT ON `tbldanhgia` FOR EACH ROW update chitietsach set Feedback = Feedback +1 where idSach = NEW.idSach
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `delete_luotcmt` AFTER DELETE ON `tbldanhgia` FOR EACH ROW update chitietsach set Feedback = Feedback -1 where idSach = OLD.idSach
$$
DELIMITER ;

DELIMITER $$
CREATE TRIGGER `add_Favorite` AFTER INSERT ON `tblfavorite` FOR EACH ROW update chitietsach set Favorite = Favorite +1 where idSach = NEW.idSach
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `delete_Favorite` AFTER DELETE ON `tblfavorite` FOR EACH ROW update chitietsach set Favorite = Favorite -1 where idSach = OLD.idSach
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER after_insert_chuong AFTER INSERT ON tblchuong FOR EACH ROW UPDATE chitietsach SET chitietsach.Sotrang = chitietsach.Sotrang + 1 WHERE chitietsach.idSach = NEW.idSach;
$$
DELIMITER ;
