CREATE TABLE chitietsach (
    idchitietsach int(11) NOT NULL AUTO_INCREMENT,
    idsach int(11) NOT NULL,
    tomtatnd text(1000) NOT NULL,
    luotxem int(11) NOT NULL DEFAULT 0,
    CHECK (luotxem >= 0),
    favorite int(11) NOT NULL DEFAULT 0,
    CHECK (favorite >= 0)
    sotrang int(11) NOT NULL,
    CHECK (sotrang > 0),
    PRIMARY KEY (idchitietsach)
);

CREATE TABLE tblaccount (
    idmember int(11) NOT NULL AUTO_INCREMENT,
    username varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    img varchar(255) DEFAULT 'https://dvdn247.net/wp-content/uploads/2020/07/avatar-mac-dinh-1.png',
    gioitinh varchar(4),
    CHECK gioitinh in ('Nam', 'Nữ'),
    ngaysinh date DEFAULT CURRENT_DATE(),
    idquyen int(11) NOT NULL DEFAULT 0, -- 0 là id quyền user, 1 là id quyền admin
    PRIMARY KEY (idmember)
);

CREATE TABLE tblchuong (
    idchuong int(11) NOT NULL AUTO_INCREMENT,
    idsach int(11) NOT NULL,
    tenchuong varchar(255) NOT NULL,
    noidung longtext NOT NULL,
    PRIMARY KEY (idchuong)
);

CREATE TABLE tbldanhgia (
    iddanhgia int(11) NOT NULL AUTO_INCREMENT,
    idmember int(11) NOT NULL,
    idsach int(11) NOT NULL,
    noidung text(250) NOT NULL,
    thoigian date NOT NULL DEFAULT CURRENT_DATE(),
    PRIMARY KEY (iddanhgia)
);

CREATE TABLE tbldanhmuc (
    iddanhmuc int(11) NOT NULL AUTO_INCREMENT,
    tendanhmuc varchar(255) NOT NULL,
    PRIMARY KEY (iddanhmuc)
);


CREATE TABLE tblfavorite (
    idsach int(11) NOT NULL,
    idmember int(11) NOT NULL,
    PRIMARY KEY (idsach, idmember)
);


CREATE TABLE tblsach (
    idsach int(11) NOT NULL AUTO_INCREMENT,
    imgsach varchar(255) NOT NULL,
    tensach varchar(255) NOT NULL,
    tacgia varchar(255) NOT NULL,
    nxb int(11) NOT NULL,
    iddanhmuc int(11) NOT NULL,
    ngaydang date NOT NULL DEFAULT CURRENT_DATE(),
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


ALTER TABLE chitietsach ADD CONSTRAINT FK_chitietsach__idsach FOREIGN KEY (idsach) REFERENCES tblsach(idsach);
ALTER TABLE tblaccount ADD CONSTRAINT FK_tblaccount__idquyen FOREIGN KEY (idquyen) REFERENCES phanquyen(idquyen);
ALTER TABLE tblchuong ADD CONSTRAINT FK_tblchuong__idsach FOREIGN KEY (idsach) REFERENCES tblsach(idsach);
ALTER TABLE tbldanhgia ADD CONSTRAINT FK_tbldanhgia__idmember FOREIGN KEY (idmember) REFERENCES tblaccount(idmember);
ALTER TABLE tbldanhgia ADD CONSTRAINT FK_tbldanhgia__idsach FOREIGN KEY (idsach) REFERENCES tblsach(idsach);
ALTER TABLE tblfavorite ADD CONSTRAINT FK_tblfavorite__idsach FOREIGN KEY (idsach) REFERENCES tblsach(idsach);
ALTER TABLE tblfavorite ADD CONSTRAINT FK_tblfavorite__idmember FOREIGN KEY (idmember) REFERENCES  tblaccount(idmember);
ALTER TABLE tblsach ADD CONSTRAINT FK_tblsach__iddanhmuc FOREIGN KEY (iddanhmuc) REFERENCES  tbldanhmuc(iddanhmuc);