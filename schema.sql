create table support
(
  id         int auto_increment,
  type       int      default 0                   not null,
  mail       varchar(255)                         not null,
  name       varchar(255)                         not null,
  comment    text                                 null,
  state      int      default 0                   not null,
  code       varchar(32)                          null,
  created_at datetime default current_timestamp() not null,
  constraint support_id_uindex
    unique (id)
);

alter table support
  add primary key (id);