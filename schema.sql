create table support
(
    id                int auto_increment,
    type              int      default 0                   not null,
    mail              varchar(255)                         not null,
    name              varchar(255)                         not null,
    orga              varchar(255)                         null,
    comment           text                                 null,
    contact_agreement int      default 0                   not null,
    data_agreement    int      default 0                   not null,
    state             int      default 0                   not null,
    code              varchar(32)                          null,
    created_at        datetime default current_timestamp() not null,
    constraint support_id_uindex
        unique (id)
);

alter table support
    add primary key (id);