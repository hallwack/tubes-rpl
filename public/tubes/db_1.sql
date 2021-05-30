/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     28/05/2021 15:06:39                          */
/*==============================================================*/


drop table if exists BUKU;

drop table if exists CUSTOMER;

drop table if exists DETAIL_TRANSAKSI;

drop table if exists JENIS_BUKU;

drop table if exists JENIS_PEMBAYARAN;

drop table if exists TRANSAKSI;

/*==============================================================*/
/* Table: BUKU                                                  */
/*==============================================================*/
create table BUKU
(
   ID_BUKU              int not null,
   ID_JENIS_BUKU        int not null,
   NAMA_BUKU            varchar(255) not null,
   PENGARANG_BUKU       varchar(255) not null,
   PENERBIT_BUKU        varchar(255) not null,
   HARGA_BUKU           int not null,
   primary key (ID_BUKU)
);

/*==============================================================*/
/* Table: CUSTOMER                                              */
/*==============================================================*/
create table CUSTOMER
(
   ID_CUSTOMER          int not null,
   NAMA_CUSTOMER        varchar(255) not null,
   ALAMAT_CUSTOMER      varchar(255) not null,
   NO_HP_CUSTOMER       varchar(13) not null,
   USERNAME_CUSTOMER    varchar(255) not null,
   EMAIL_CUSTOMER       varchar(255) not null,
   PASSWORD_CUSTOMER    varchar(16) not null,
   primary key (ID_CUSTOMER)
);

/*==============================================================*/
/* Table: DETAIL_TRANSAKSI                                      */
/*==============================================================*/
create table DETAIL_TRANSAKSI
(
   ID_DETAIL_TRANSAKSI  int not null,
   ID_TRANSAKSI         int not null,
   ID_BUKU              int not null,
   BANYAK_PEMBELIAN     int not null,
   TOTAL_PEMBELIAN      int not null,
   primary key (ID_DETAIL_TRANSAKSI)
);

/*==============================================================*/
/* Table: JENIS_BUKU                                            */
/*==============================================================*/
create table JENIS_BUKU
(
   ID_JENIS_BUKU        int not null,
   JENIS_BUKU           varchar(255) not null,
   primary key (ID_JENIS_BUKU)
);

/*==============================================================*/
/* Table: JENIS_PEMBAYARAN                                      */
/*==============================================================*/
create table JENIS_PEMBAYARAN
(
   ID_JENIS_PEMBAYARAN  int not null,
   JENIS_PEMBAYARAN     varchar(255) not null,
   primary key (ID_JENIS_PEMBAYARAN)
);

/*==============================================================*/
/* Table: TRANSAKSI                                             */
/*==============================================================*/
create table TRANSAKSI
(
   ID_TRANSAKSI         int not null,
   ID_JENIS_PEMBAYARAN  int not null,
   ID_CUSTOMER          int not null,
   TANGGAL_TRANSAKSI    timestamp,
   TOTAL_TRANSAKSI      int,
   primary key (ID_TRANSAKSI)
);

alter table BUKU add constraint FK_RELATIONSHIP_1 foreign key (ID_JENIS_BUKU)
      references JENIS_BUKU (ID_JENIS_BUKU) on delete restrict on update restrict;

alter table DETAIL_TRANSAKSI add constraint FK_RELATIONSHIP_5 foreign key (ID_TRANSAKSI)
      references TRANSAKSI (ID_TRANSAKSI) on delete restrict on update restrict;

alter table DETAIL_TRANSAKSI add constraint FK_RELATIONSHIP_6 foreign key (ID_BUKU)
      references BUKU (ID_BUKU) on delete restrict on update restrict;

alter table TRANSAKSI add constraint FK_RELATIONSHIP_3 foreign key (ID_JENIS_PEMBAYARAN)
      references JENIS_PEMBAYARAN (ID_JENIS_PEMBAYARAN) on delete restrict on update restrict;

alter table TRANSAKSI add constraint FK_RELATIONSHIP_4 foreign key (ID_CUSTOMER)
      references CUSTOMER (ID_CUSTOMER) on delete restrict on update restrict;